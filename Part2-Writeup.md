#Project Part 2 - Documentation
###Terry Tan - Fall 2016
### What Changed from Part 1?
After Part 1, I changed the CSS and HTML styling to include the assymetrical section at the top of the page (using skew to rotate the background).
Furthermore, I added the transparent header images that say "Hello" and "Resume" to give it more of a playful and artistic feel. I also changed the index to include a lot of PHP. I changed each resume item (each box in my resume section) to be "ResumeItem" classes that were saved in an array. This is all done in resumeitems.php and included in index.php. When the webpage is requested, the PHP loops through the array. Thus, I condensed the written HTML down by doing that. I did a very similar thing for my portfolio images, I saved the image URL's into an array and looped through them. The array is created in portfolio.php and  

SQL was used for submitting the form to the database. AJAX was used to submit the form, and change the contents of the page WITHOUT refreshing the page. The SQL is written in submit.php, this is called from js_stuff.js. The ajax call is used to call submit.php, because I did not want the page to refresh upon submitting the form. I wanted the form to disappear and display a submission message when a user submitted a valid form input.

### What Did I Learn?
I learned how to use PHP, SQL, and AJAX. PHP was very convinient for reducing redundant coding. SQL and AJAX were the most interesting for me, since I had never worked with databases before. 
