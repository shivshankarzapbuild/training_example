#include<iostream>
using namespace std;

int main() {

    long long int power, number=1;
    cout<<"Enter any number as power of 2";
    cin>>power;
    for(int i = 1;i<=power;i++){
        
        number = number *2;

    }

    cout<<"2 Power "<<power<<"="<<number;

    return 0;
}