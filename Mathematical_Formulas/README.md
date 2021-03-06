# Basic formulas. 

<pre>
    <b>Constant</b> <i>c</i>

    &#402;(n) = c | For some fixed constant c, such as c = 5, c = 27, or c = 2 <sup>10</sup> 

    a = b + 1; | one line code
</pre> 

<pre>
    <b>Logarithmic</b>  <i>log<sub>(n)</sub></i>

    &#402;(n) = log<sub>b</sub>n | for some constant b > 1

    Indeed, since computers store integers in binary, 
    the most common base for the logarithm function in computer science is 2. 
    In fact, this base is so common that we will typically leave it off when it is

    log n = log<sub>2</sub>n | 12/2/2/2/2 0.75 < 1

    while(n>1){
        n=n/2;
    }
</pre>

<pre>
    <b>Liner</b> <i>n</i>
    &#402;(n) = n | loop
    for($i=0; $i<=n; $i++){
        ...
    }
</pre>

<pre>
    <b>n log n</b> 

    &#402;(n) = n log  n | that is, the function that assigns to an input n the value of n times the logarithm 
    base-two of n.
</pre>

<pre>
    <b>Quadratic Function</b> n<sup>2</sup>

    &#402;(n) = n<sup>2</sup> | That is, given an input value n, the function f assigns the product of n with itself
    (in other words, "n squared"). Nested Loops

    for(i=0; i<=n; i++){
        for(ii=0; ii<=n; ii++){
            ...
        }
    }
</pre>

<pre>
    <b>The Cubic Function</b>  n<sup>3</sup>

    &#402;(n) = n<sup>3</sup> | Which assigns to an input value n the product of n with itself three times.

    for(i=0; i<=n; i++){
        for(ii=0; ii<=n; ii++){
            for(iii=0; iii<=n; iii++){
                ...
            }
        }
    }
</pre>

<pre>
    for(i=10; i<=10; i++) = 1+2+3+4+5+6+7+8+9+10 = 55 

    The formula is - 1+2+3+...+(n-2)+(n-1) = n
    Then 1+2+3+...+(n-2)+(n-1) = n(n+1)/2

    for(i=10; i<=10; i++) = n(n+1)/2
    <hr />
</pre>