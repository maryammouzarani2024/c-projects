#include <stdio.h>
int main()
{
    int var =10;
    int *p;
    p= &var;

    printf ( "\n Address of var is: %u", &var);
    printf ( "\n Address of var is: %u", p);

    printf ( "\n Address of pointer p is: %u", &p);

    /* Note I have used %u for p's value as it should be an address*/
    printf( "\n Value of pointer p is: %u", p);

    printf ( "\n Value of var is: %d", var);
    printf ( "\n Value of var is: %d", *p);
    printf ( "\n Value of var is: %d", *( &var));
}