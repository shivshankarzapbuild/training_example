#include<iostream>
#include<cmath>

using namespace std;
int main(){
     long int n,i;
     double num=0.0000000,sqNum,sqNum1,sqNum2,sqNum3,sqNum4;

    cout<<"Enter any number";
    cin>>n;
    for(i=1;i<n;i++)
     {
         if((i*i)<n)
          {
              continue;
          }
          else{
              //NOW the square root is in between i and i-1
              num=i-1;
              label:
              num = num+0.1;
              sqNum = pow(num,2);
              if(sqNum<n)
              {
                  goto label;
              }
              else
              {
                //now square root of the number is between num and num-0.1
                num = num - 0.1;
                label1:
                 num = num + 0.01;
                 sqNum1 = pow(num,2);
                 if(sqNum1<n)
                    {
                        goto label1;
                    }
                    else
                        {
                        num = num - 0.01;
                        label2:
                        num = num + 0.001;
                        sqNum2 = pow(num,2);

                    //break;
                            if( sqNum2<n){
                                goto label2;
                            }
                            else
                                {
                       // break;
                                num = num - 0.001;
                                  label3:
                                num = num + 0.0001;
                                sqNum3 = pow(num,2);
                                    if (sqNum3<n)
                                        {
                                         goto label3;
                                        }
                                        else
                                            {
                                                num = num-0.0001;
                                                break;
                                           }
                      
                      

                                }
                    
                        }
                
              }
              
              //break;
          }
     }
     cout<<"Square root of "<<n<<" is "<<num;

    return 0;
}