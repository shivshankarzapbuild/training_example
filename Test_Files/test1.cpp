#include<iostream>
using namespace std;

int main(){
char str;
short i;
long i1;
char *mychar=&str; //points to memory location 1000

short *myshort = &i; //points to memory location 2000

long *mylong = &i1; //points to memory location 3000

mychar++;

++myshort;

mylong++;

cout << mychar << myshort << mylong;

return 0;

}