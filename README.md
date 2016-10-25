# PHP Basic course exercisses

## Hello PHP World

### Task 000 - Prepare php page

Crate page called `task001.php` for your forst task. File should start with opening tag: `<?php`. PHP file should NOT include closing tag `?>`.

Reason why we left out closing tag is it can cause a lot of problems later. If you want to learn more read [this](http://stackoverflow.com/questions/4410704/why-would-one-omit-the-close-tag#4499749)

### task 001 - Echo language construct

In the file from previous task print out text using the language constuct `echo` and single quotes `'`;

I went down to the river,  
I set down on the bank.  
I tried to think but couldn't,  
So I jumped in and sank.  

I came up once and hollered!  
I came up twice and cried!  
If that water hadn't a-been so cold  
I might've sunk and died.

### task 002 - Variables

Create variable with name `firstName` and initialize it with your name. Next, create a variable `$age` and initialize with your ages. Create one more variable with name `height` and assign your height as double (Example `1.78` in meters).

Use `print_r` and `var_dump` to see variable values and type.

You can notice that all variables are `strings`. You should convers `age` into `integer` and `height` into `double`.

After conversion asign a values to new variables `ageInteger` and `heightDouble`. Use `var_dump` or `print_r` to see how new varibles looks like.


### task 003 - Array - most frequent element

Create the array by reading user inputs on the screen. User will enter array values by separating them with commas.

Than find the most frequent element and output in on the screen.

### task 004 - Array - reverse array

Create the array like in previous task. Reverse the array values and output array on the screen.

### task 005 - Array - largest in array

Create the array on the same way we did so far. This time add validation that array can accept only integer or double.

Find the largest element and output his value on the screen.

### task 006 Array - sort the array

Create the array that accept only integer and double like in previous task. Sort the array values in ascending order.


### Task 7
For this exercise, you will use a list of ten of the largest cities in the world. (Please note, these are not the ten largest, just a selection of ten from the largest cities.) Create an array with the following values:Tokyo, Mexico City, New York City, Mumbai, Seoul, Shanghai, Lagos, Buenos Aires, Cairo, London.

Print these values to the browser separated by commas, using a loop to iterate over the array. Sort the array, then print the values to the browser in an unordered list, again using a loop.

Add the following cities to the array: Los Angeles, Calcutta, Osaka, Beijing. Sort the array again, and print it once more to the browser in an unordered list.

###Task 8

In this PHP exercise, you will create an array, print it to the browser, then ask the user to add to it.

Create an array of modes of transportation, including Automobile, Jet, Ferry, Subway. Print the following statement to the browser: "Travel takes many forms, whether across town, across the country, or around the world. Here is a list of some common modes of transportation:" Follow this with an unordered list created by iterating through the array variable you created.

Next, give the user a text box and ask the user to add other modes of transportation to the list, separated by commas. When the user clicks 'Go', process the input with array functions to send back the original list with the user's additions. Include another text box with the text "Add more?" and another submit button. When the user clicks this button, the page should reload with the new additions added to the previously expanded list. Your code should allow the user to add items as many times as they like.

###Task 9

In this PHP exercise, you will again use the list of cities in Arrays Task 7. Here's the list, this time including countries as well as cities:
Tokyo, Japan; Mexico City, Mexico; New York City, USA; Mumbai, India; Seoul, Korea; Shanghai, China; Lagos, Nigeria; Buenos Aires, Argentina; Cairo, Egypt; London, England.

This time, create an associative array, using the countries as keys, the cities as values. Create a form for the user, with the instructions Please choose a city:

Follow this request with a select field for the 10 cities, with the options created by looping through the array. When the user clicks the submit button, return the statement `$city` is in `$country`., where `$city` is the value chosen by the user, and `$country` is its key.

###Task 10

This PHP exercise has two parts. In the first, you will take the large cities array from Arrays Ex. #7 and transform it into a multi-dimensional array. That will become the data in a table.
Rewrite the large cities array into a multi-dimensional array called `$multiCity`.

The first sub-array will be completely new and include the labels, City, Country, Continent. (These will become the keys in the second half of this exercise.) Each of the succeeding sub-arrays should include those three items, one for each of the cities, for a total of 11 sub-arrays.
Here's the content for your array: City, Country, Continent; Tokyo, Japan, Asia; Mexico City, Mexico, North America; New York City, USA, North America; Mumbai, India, Asia; Seoul, Korea, Asia; Shanghai, China, Asia; Lagos, Nigeria, Africa; Buenos Aires, Argentina, South America; Cairo, Egypt, Africa; London, UK, Europe.

In the HTML, use the array in a table. The first row should be a header row and contain the entries in the first sub-array. Call these items without using a loop. For the succeeding rows, use a for loop with a foreach loop nested inside to populate the table with the remaining contents of the array. Use the count() function so that your for loop will function properly even if you increment or decrement the array.

Add a simple style sheet in the head section of your HTML. You can take on this challenge yourself or simply cut and paste the following between the <head></head> tags.

    <style type="text/css">
        td, th {width: 8em; border: 1px solid black; padding-left: 4px;}
        th {text-align:center;}  
        table {border-collapse: collapse; border: 1px solid black;}
    </style>

###Task 11
PHP includes all the standard arithmetic operators. For this PHP exercise, you will use them along with variables to print equations to the browser. In your script, create the following variables:

    $x=10;
    $y=7;


Write code to print out the following:

    10 + 7 = 17
    10 - 7 = 3
    10 * 7 = 70
    10 / 7 = 1.4285714285714
    10 % 7 = 3

Use numbers only in the above variable assignments, not in the echo statements. You will need a third variable as well.

Note: this is intended as a simple, beginning exercise, not using arrays or loops. Some of the solutions in comments include these structures. If you don't understand them, just keep learning, and you will.

###Task 12

In the next PHP exercise, you will request input from the user, then move the user's response from one file to another and do something with it.

Create two separate files. The first will contain a form with one input field asking for the user's favorite city. Use the post method for the form. Although this file contains no PHP code, on my localhost, it needs the .php extension to successfully call the second file.
The second file will contain PHP code to process the user's response. (In this case, something very simple.) After the user clicks the submit button, echo back Your favorite city is $city., where $city is the input from the form.

Hint: the variable that contains the user's input is an array. Arrays will be addressed in future exercises, but this particular array needs to come into play here. The array variable is `$_POST['name']` , where 'name' is the name of your input field.

###Task 13

In this PHP exercise, you will build the beginnings of a user registration form. To do this, you will create a class for making the select field, then use an object derived from the class in the form. You can begin with the script you wrote for Functions Ex. #8, since you will be revising the two functions you created there as methods of your class.

First of all, write an array that includes browser types: Firefox, Chrome, Internet Explorer, Safari, Opera, Other.

Then begin to write the class Select. You will need two properties, `$name` for the name of the select field, and `$value`, an array to provide the option values. You will also need four methods in addition to the two methods you will adapt from Functions Ex. #8: setName, getName, setValue, getValue. Checking to be sure the value is an array belongs in the setValue method, so write that here, and delete it from from makeSelect if you are using your script from Functions #8.
Now we come to the two functions you wrote to generate the select field for Functions Ex. #8. Change the makeOptions function to iterate over the array argument's values rather than keys. This will be your fifth method. Then revise the makeSelect function to be the sixth method in your class.
Next comes the HTML. Write a user registration form asking for name, username, email, browser. Use text fields to collect the user data for the first three, then instantiate an object based on your class for the select field. When the user clicks the submit button, return the data as confirmation.
If you were creating a registration form to use on the Web, you would want to collect the data in a database. However, using PHP with mySQL or other databases is beyond the scope of this website.

###Task 14.

In the last PHP exercise, the Select class may have seemed like an awful lot of code to write for a simple select field. The real value of classes and objects doesn't become apparent until you have reason to reuse the code. So this time, you will expand your user registration form to use several select fields.

Assume that you have good reason to need data about your users' browsing capabilities. Either you want to tune your site, the content of your site concerns these issues, or something similar. Using your select class, you can reuse the class code as often as you like to create select fields.

To build this new version of the registration form, start with the script you wrote for Classes Ex. #1. Add the value of None as the first value in the `$browsers` array. Write two more arrays: `$speeds`, including values Unknown, DSL, T1, Cable, Dialup, Other; and `$os`, including Windows, Linux, Macintosh, Other. (Of course, these could be screen resolution or flash version or any other relevant capability.)

You want data for how the user browses both at home and work. Above the browser select field, add the subheading Work Access, and rename the browser label Primary Browser. (We all know that many people use more than one.) Below that, add labels and select field objects for Connection Speed and Operating System. Next, add the subheading Home Access, with three new select fields corresponding to the ones you created for Work Access.

Since you are using so many objects in this script, it's a good idea to destroy each one after it has done its work. This will free up the memory the object occupied.
When the user hits the submit button, return the user's select field choices in two bulleted lists under the same headings (Work Access, Home Access).

###Task 15

If you completed PHP Classes Ex. #13 and #14, you have now written a working user registration form. Time to tweak it and make it better.

First of all, it would be preferable to have the message --Select one-- at the top of each select field. Add a line to the makeSelect() method to accomplish this. The value should be `No response`. You won't need the "None" value at the top of the `$browsers` array, so delete that. With this change to class Select, you can see how using a class can simplify your work. One line of code, and all the select fields update.

Your user responses won't be very useful without some basic information, so the next task is to make three of the fields required. Above the form, add * Indicates required field. Then add an asterisk to the Name, Username, and Email fields.

Next, add code to validate the data in those three fields. This code will appear in the second half of the script, after you have retrieved data from the `$_POST[]` variable. The function empty() will let you know if there is data in the field. To help the user supply missing information, include a back button with the error message. (If you completed Forms Ex. #6, you have already written one of those.)
The email field is a special case. Not only can you check for the presence of data, you can check for an @(at symbol), which would be included in any valid email address. So here the data must satify two conditions to be acceptable. You can use the strpos() function to confirm the presence of the @ character.
