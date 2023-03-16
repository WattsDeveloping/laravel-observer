## How to use Laravel Model Observers

In this example is a very simple use of a laravel observer, when you need to generate a slug or auto generate the unique_id on creation or update of a product.

The eloquent hooks I have used in this version are as follows
- Creating: Before a record has been created
- Created: After a record has been created

I have left a DD() in the code of the ProductController for you to see the outputs clearly.

Simply head to /product when you have setup the repo

I hope this repo helps. Thanks