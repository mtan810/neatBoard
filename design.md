# Design

The purpose of neatBoard is to be a simple and user-friendly message board. Whenever I browse a website similar to, say Reddit, I feel 
that there is way too much going on each page. Thus I decided to create this website with a design that is hopefully less 
cluttered and more user-friendly.

Initially when I was designing and building the website, I planned on taking some of the functionality and layout from pset7. I 
really liked MVC model and felt that the project was much smoother and easier to work with when implementing it. Everything is neatly
laid out in different directories. The "includes" directory contains the configurations and functions which were very useful. I 
slightly modified config.php so that the users are able to view about.php and contact.php, which are the "About Us" and the "Contact 
Us" of the website. For constants.php, the name of the database is changed to "project" instead. As for functions.php, mostly 
everything is left in tact except apology where I had to insert some code for the theme to show up for the site. query, render, and
redirect are very useful functions for controlling the flow and logic behind the project.

The "public" directory includes the "controllers" of the project. login.php and logout.php are the same; they control the login
and logout functionality. The user needs to be logged in in order to view most of the contents of the website. register.php is 
slightly modified so that when the user registers for an account, he/she will have a set default theme and set post name as "Anon" 
(more details on those later). about.php and contact.php, as mentioned, renders the "About Us" and Contact Us" info. index.php is 
similar to about.php and contact.php as it renders the "Homepage" info. Now onto the three main controllers of the project: 
forum.php, thread.php, and setting.php. But before getting into those three, the design of the mySQL database should be addressed 
first.

The database consists of three tables: users, topics, and comments. The table structure of users is similar to that of pset7.
There is id, which is unique and identifies the user. There is username, which is the name of the user he/she inputted when 
registered and is used to identify the user. And there is hash, which stores the user's encrypted password. The difference is that 
this table has two additional fields: theme and type. These fields correspond to the extra features that were implemented with
the website. theme stores the color chosen by the user. type stores either the string "Anon" or the username. These two fields are
created so that the users' settings will be stored.

The topics table stores all the data related to topics. The table consists of six fields: num, name, time, comment, type, and 
id. num is the unique index that identifies the topics. name stores the username of the user, or "Anon" if the user chose to post 
with that instead. time is the timestamp when the topic is created. comment is the user's topic description. type is the subject in
which the topic is created (film, literature, etc.). And id is the id of the user that created the topic. 

The comments table is similar to the topics table except it stores all the data related to comments instead. The table consists
of six fields as well: num, topic, name, time, comment, id. num is the unique index that identifies the comments. In this case, all
comments will have a unique number even if they are posted in different topics. topic stores the topic number of the topic which the
comments are posted in. name stores the username of the user, or "Anon" if the user chose to post with that instead. time is the 
timestamp when the comment is created. comment is the user's post message. And id is the id of the user that created the comment.

The tables are designed the way they are because I felt that all the fields within each table are important. The extra settings
in the users table are necessary to store and keep the data for each user. All the details for topics and comments are important 
in a way that they are necessary for display. The website should show all the important info to the users, such as the message of
topics/comments, the username of the user that created those messages, and the time of creation. The topic number and comment 
numbers are useful to keep track of each topic/comment and to differentiate them from each other. The ids show the owners of the
topics and comments, which could be quite useful in identifying who is who.

Back to the main controllers. forum.php controls the logic of topics. It queries the topics and users table first. When a user
creates a topic via post, I made sure that the user actually post something (not an empty string or blank spaces). It would not make
sense to create a topic without an actual topic. Then if the topic post is within the list of subjects, then store the topic and 
the details of the topic to the topics table. After storing the topic, render its form and redirect back to the subject in which
the topic is posted in. 

Similar to forum.php, thread.php controls the logic of comments. However, it queries all the tables within the database. When
the user posts a comment, query the topics table again and check that the thread exists based on the topic number. If it does, then
store the comment and the details of the comment to the comments table. After storing the comment, render its form and redirect back
to the thread in which the thread is posted in.

Lastly, setting.php controls the logic of the settings. It only queries the users table. It looks out for two posts: one for
picking a theme and the other for choosing what to post as. If the post request is for the former, it checks whether it is "Anon" or
not. If it is, update the table field "type" to "Anon". Else update the table to store the username instead. If the post request is
for the latter, then update the table field "theme" to the color the user has chosen.

Now that the main controllers are described, let's get to the final directory, "template", which stores all the forms respective to 
each controller. about_form.php, contact_form.php, and index_form.php are similar in a way that they provide more information to
the users about the website. login_form.php and register_form.php are more or less the same. apology.php and dump.php are required
for certain function calls. The forms to the main controllers are the most important and should be looked at with more detail.

forum_form.php is the form to forum.php. The topic box is designed so that the maximum amount of characters the users can input
is 500. I feel 500 characters should be enough for one comment, and users can always post another comment if there is not enough space.
The row of the table is extended to 4 to enlarge the topic box. The topic table originally consists of 4 columns: thread number, 
time, name, topic. However, I felt that 4 is a bit too much and the thread number is not particularly useful for the users. So now
the topic table consists of 2 columns only: topic and name with time. Instead of centering everything, the topic is aligned to the
left whereas the name and time are aligned to the right. The width of topic is 80/100 whereas the width of the name and time is 
20/100. It makes sense since topic can take up to 500 chars and thus need more space. The colors of the table is fixed to blue,
white, and gray to fit the default color scheme of the website. As for the output of the table, originally the latest topic 
created would be at the bottom of the table. But I decided that it should be at the top instead and reversed the print output of the
table. The output generates a link for each topic to thread.php?p=n, where n corresponds to the thread number. The problem 
initially was that the user can manipulate n. Thus I added a restriction where the user cannot post messages if n is bigger 
than the thread number, since the thread does not exist yet.

thread_form.php is the form to thread.php. The comment box is designed the same as the topic box but it is placed at the bottom
of the page instead of the top. As for the output of the comments, a comment consists of two lines. The first line includes the name,
time, and comment number. The reason the comment number is included is so that users can reference comments based on their unique
ids. The second line is the post message itself. Each comment is surrounded by a blue rectangle. The first post of the thread is 
always the topic description and has a few extra margins at the bottom. The rest of the comments are spaced evenly between each other.
The comments are designed so that there is spacing between the comment details, the post message, and the blue rectangle. When a user 
posts a comment, the comment goes to the bottom of the page, right above the comment box. Thus the earliest posts are at the top
whereas the latest comments are at the bottom, the order being the opposite of topics.

Last but not least, setting_form.php is the form to setting.php. The two features are in a table. The left side of the table is
the theme option, where users can choose and apply a theme to the website. The themes are listed in a drop down menu. Once the user
selects a theme and hit the "Select!" button, the page will refresh with the background color having been changed based on the
selection. In future updates, I plan to include a color picker, which will allow the user much more options for customization. And
perhaps include the ability to change every color of each element of the site, such as tables, comments, etc. To the right side of
the table, the user can choose to post as "Anon" or his/her username. Since there are only two options, I felt that radio buttons
would be more suitable than a drop down menu. After choosing one or the other and pressing the "Select!" button, the user will be 
able to post based on what he/she chose. The current theme and the post as message are located at the bottom of the table in order 
to let the user know his/her current settings.

At stated in the beginning, the purpose of the design is to make the site simple and user-friendly. There is no unnecessary 
clutter. Due to time constraints, I was able to complete the features I wanted to implement except for image uploading.
Although the final project has ended, I feel that it is only the beginning for me and neatBoard. There is always a way
to improve the site. Thus I look forward to continue working with neatBoard and improving it so that it may someday be a great site 
to use.
