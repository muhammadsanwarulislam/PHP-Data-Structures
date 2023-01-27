### Stack ###

A stack is a linear data structure that follows **the Last In First Out (LIFO) principle**. This means that the last element added to the stack will be the first one to be removed.

It can be implemented using an array or a linked list. The basic operations that can be performed on a stack are push, pop and peek. 
**Push operation is used to insert an element at the top of the stack, Pop operation is used to remove an element from the top of the stack and peek operation is used to look at the top element of the stack without removing it**.

The main advantage of a stack is that it's very efficient for inserting and removing elements from the top of the stack. This makes it a good choice for implementing undo/redo functionality or for keeping track of function calls in a program.
It is important to note that stack has a fixed size and can become full, this is called overflow, and when there are no elements in the stack, it is called underflow.

A common example of using a stack is to demonstrate the process of evaluating **postfix expressions (also known as reverse Polish notation)**. In postfix notation, operators come after the operands, rather than before them as in infix notation.

For example, the expression "3 4 + 5 × 6 -" would be evaluated as follows:

Start with an empty stack.
Read the 3 and push it onto the stack.
Read the 4 and push it onto the stack.
Read the + operator and pop the two most recent operands (4 and 3), add them together, and push the result (7) back onto the stack.
Read the 5 and push it onto the stack.
Read the × operator and pop the two most recent operands (5 and 7), multiply them together, and push the result (35) back onto the stack.
Read the 6 and push it onto the stack.
Read the - operator and pop the two most recent operands (6 and 35), subtract the first from the second, and push the result (29) back onto the stack.
The final value on the stack is the result of the expression (29).
This example shows how a stack can be used to keep track of intermediate results and operators in a mathematical expression.
