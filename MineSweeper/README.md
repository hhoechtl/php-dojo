# CodingDojo - MineSweeper

## Description

Well, the goal of the game is to find all the mines within an MxN field. To help you, the game shows a number in a square which tells you how many mines there are adjacent to that square. For instance, take the following 4x4 field with 2 mines (which are represented by an * character):

```javascript
. . * .
. * . . 
. . . .
. . . .
```

The same field including the hint numbers described above would look like this:
```
1 2 * 1
1 * 2 1
1 1 1 0
0 0 0 0
```
## What to do

You should write a program that takes input as follows:

The input will consist of an arbitrary number of fields. The first line of each field contains two integers n and m (0 < n,m <= 100) which stands for the number of lines and columns of the field respectively. The next n lines contains exactly m characters and represent the field. Each safe square is represented by an "." character (without the quotes) and each mine square is represented by an "*" character (also without the quotes). The first field line where n = m = 0 represents the end of input and should not be processed.

Your program should produce output as follows:

For each field, you must print the following message in a line alone:

Field #x:

Where x stands for the number of the field (starting from 1). The next n lines should contain the field with the "." characters replaced by the number of adjacent mines to that square. There must be an empty line between field outputs.

## Clues

As you may have already noticed, each square may have at most 8 adjacent squares.

## Example

Input
```
4 4
*...
....
.*..
....
3 5
**...
.....
.*...
0 0
```
Output
```
Field #1:
*100
2210
1*10
1110

Field #2:
**100
33200
1*100
```

## Getting started

We prepared the basic application and the tests. To install the application simply execute `composer install` in the current directory.

Open the file `Classes\MineSweeper.php` using your favorite editor/IDE and fill in the methods. Feel free to create new methods and call them, create new classes or do whatever you like to achieve the goal:
```
./runtest.sh
```
Should output:
```
OK (2 tests, 2 assertions)
```


## Source
[Composer](http://composer.org)<br>
[PHPUnit](http://www.phpunit.de)<br>
[CodingDojo.org](http://codingdojo.org/cgi-bin/wiki.pl?KataMinesweeper)