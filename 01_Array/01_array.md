## Array
**An array a linear data structure that collects elements of the same data type and stores them in contiguous and adjacent memory locations**. It's a most common data structure to execute different kind of operations. We can store multipe values in a single array as a single variable. This makes it easier to calculate the position of each element by simply adding an offset to a base value. Here is a single dimension of array in the diagrams.

![array](https://user-images.githubusercontent.com/29992994/211781529-94e727b1-a358-4e32-814c-99cce0f4f57f.png)

If we want to categorize the array, then there are mainly three types of arrays:
* Numeric array
* Associative array
* Multidimensional array

**Numeric array**
A numeric array does not mean it only holds numeric data.In fact, it means the indexs will be numbers only. In numeric arrays, values are store and accessed in a linear way. In PHP numeric array they can be sequential or non-sequential but they have to be numeric. Here some examples of PHP numeric array:

```
$numbers = [2,4,5,6,7,24];

foreach($numbers as $key => $number){
    echo "The position " .$key. " holds the value " .$number. "\n";
}
```
This will have following output:
```
The position 0 holds the value 2
The position 0 holds the value 4
The position 0 holds the value 5
The position 0 holds the value 6
The position 0 holds the value 7
The position 0 holds the value 24
```

