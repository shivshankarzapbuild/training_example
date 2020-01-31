#include<iostream>
using namespace std;

int main(){

	int ar[20],decimal,i=0,temp,j=0,cnt=0,ar1[20],count=0;
	cout<<"Enter any Decimal Number";
	cin>>decimal;

	while(decimal>=2){
		ar[i] = decimal%2;
		decimal = decimal/2;
		i++;
	}
	ar[i] = decimal;
 cout<<decimal<<" Equivalent binary is :";
	for(int k=i;k>=0;k--){
		cout<<ar[k];
        ar1[j]=ar[k];
        j++;
	}

        for(int k=0;k<=i;k++){
            temp = ar1[k];
            cnt =0;
            if(ar1[k] == 1){
                for(j = k+1;j<=i;j++)
                    if(ar[j]==0){
                        cnt++;
                    }else{
                        break;
                    }
                 }
                if(count<cnt){
                    count = cnt;
                }
                 ar[k] = 0;

            }

 cout<<"Largest binary gap = "<<count;
        
        return 0;
}