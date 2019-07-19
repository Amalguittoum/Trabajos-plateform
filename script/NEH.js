

function insertNEH(T, indice, val)
{
	var T2 = [];
    
   // alert("ok");
	for (var i = 0; i<indice; i ++)
	{
		T2[i] = T[i];
	} 
	T2[indice] = val;
	for (var i = indice+1; i<T.length +1; i ++)
	{
		T2[i] = T[i-1];

	} 
  
	return T2;
}
function neh(p_ij)
{
     
var times = p_ij;

	var nbTache = times[0].length;
	var nbMach = times.length;
 
	var sum = 0;
	var tempsTotal = [];
	var t0 = performance.now();
	for(var k=0; k<nbTache; k++) { tempsTotal[k] = {id : 0, total :0}; } 
	for(var i= 0; i < nbTache; i++)
	{	
			sum = 0;
	     	for(var j= 0; j < nbMach; j++)
			{
			      sum = sum + times[j][i];
			}
			tempsTotal[i]= { id : i, total : sum};
  
	}
	tempsTotal.sort( function(a, b){
	return b.total-a.total});
 

	var temp;
    var order, sauv, sauvO, order2;
	order = [tempsTotal[0].id,tempsTotal[1].id];
	temp = makespanNEH(order, times, nbMach);
	order = [tempsTotal[1].id,tempsTotal[0].id];
	if(temp < makespanNEH(order, times, nbMach))
	{
		order = [tempsTotal[0].id,tempsTotal[1].id];
	}
 
	if (nbTache>2){
	for(var t = 2; t <tempsTotal.length; t ++ )
	{
 
		sauv = 0;
        order2 = insertNEH(order, 0, tempsTotal[t].id);
       
		sauv = makespanNEH(order2, times, nbMach);
        sauvO = order2;
		for (var i= 1; i < order.length; i++)
		{ 
			order2 = insertNEH(order, i, tempsTotal[t].id);
          
			temp = makespanNEH(order2, times, nbMach);
			if (temp< sauv)
			{
				sauv = temp;
				sauvO = order2;
			}
		}
		order = sauvO;
		
	}
	var t1 = performance.now();
	var t2 = t1-t0;
 

}
 
return order;
}

function makespanNEH(my_seq, p_ij, nbm){
    var c_ij = [];
    for (var i =0; i< nbm; i++)
    {
    	c_ij[i] =  new Array(my_seq.length+1);
    	for (var j =0; j<my_seq.length+1; j++)
    		c_ij[i][j] = 0;
    }
    
     for (var j =1; j<= my_seq.length; j++)
    {
    	
        c_ij[0][j] = c_ij[0][j - 1] + p_ij[0][my_seq[j - 1]];
      

    }
    for(var i=1; i<=nbm-1; i++)
    	for(var j =1; j<=my_seq.length; j++)
    		{
            c_ij[i][j] = maxNEH(c_ij[i - 1][j], c_ij[i][j - 1]) + p_ij[i][my_seq[j - 1]];
            
             }
 
 return (c_ij[nbm - 1][my_seq.length]);
}

function makespanNEH2(seq, p_ij, n){
    var i,j;
    Time = [];
    
    for(var k=0; k<n; k++) Time[k] = new Array();
    var elem = {
        deb : 0,
        fin : 0};
    elem.fin = elem.deb + p_ij[0][seq[0]];
    Time[0][0] = elem;
    for(i=1; i<n; i++)
    {
        var elem = {
            deb : 0,
            fin : 0
        };
        elem.deb = Time[i-1][0].fin;
        elem.fin = elem.deb + p_ij[i][seq[0]];
        Time[i][0] = elem;
    }
    for(j=1; j<seq.length; j++)
    {
        var elem = {
            deb : 0,
            fin : 0
        };
        elem.deb = Time[0][j-1].fin;
        elem.fin = elem.deb + p_ij[0][seq[j]];
        Time[0][j] = elem;
         
    }
 
    for(var i=1; i<=n-1; i++){
    	for(var j =1; j<seq.length; j++)
    		{
            var elem = {
            deb : 0,
            fin : 0
        };
           if(Time[i-1][j].fin>Time[i][j-1].fin) elem.deb = Time[i-1][j].fin;
           else elem.deb = Time[i][j-1].fin;
             elem.fin = elem.deb + p_ij[i][seq[j]];
             Time[i][j] = elem;
           

             }}

 return Time;
}




function maxNEH(a,b)
{
 if( a>b) return a;
 else return b;
}
