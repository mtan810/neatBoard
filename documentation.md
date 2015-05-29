Inspired by popular websites such as Reddit, Twitter, 4chan, 2channel, Futaba, etc., I have decided to try and implement my
own version of an online message board for CS50's final project. The result is neatBoard, an online discussion website/message board
that allows users to talk about subjects in the form of posted messages. neatBoard hosts a variety of popular subjects: Anime, 
Manga, Film, Literature, TV, Music, Games, Sports, News, Tech, Programming, and Miscellaneous. These subjects are subjected to change, and
more may be added later. The users may choose which subject are of interest to them and can view all subjects if they want.
Registration is required before viewing. But once the users register and log in, they can begin to explore all the 
possibilities this message board has to offer.

Once a user picks a subject of interest, he/she will have two options. The first option is to create a topic for discussion.
The topic should be related to the subject he/she chose. In order to create a topic, the user should enter his/her topic 
description into the text box shown near the top of the page. Once the user is finished, all he/she has to do is press the "Create 
Topic!" button below the text box. Once the button is pressed, the page will refresh itself and the user will be able to see his/her
newly created topic on the top of the table. The table is simple; it displays topics to the left and the names of the users that
created those topics respectively to the right, along with the date and time of the topic created. The second option is to view 
said topics from the table. When a topic is created, a link is generated on the topic name. By clicking on the link, the user will
be taken to the page where discussion about said topic goes into.

Once the user clicks on a topic link, he/she should see that the first post will be the topic itself. The first line displays
the username, the time of the post created, and the topic number, which is used to keep track of the topic. The second line would 
be the topic message itself. The user can now begin posting comments to generate discussion about the topic. In order to post a 
comment, the user has to scroll to the bottom of the page, where he/she will see the comment box. The user can type his/her comment
in the comment box and press the "Post!" button when finished. The page will then refresh to the top of the page. The user will need
to scroll back down, or press the "Go to bottom of page" link near the top right of the page to go to the bottom of the page, to 
see his/her comment. Similarly, the user can press the "Go to top of page" link near the bottom right of the page to go back to the
top of the page if necessary. The numbers on each comments are unique so that users can refer to each comment easily. Note that 
comment numbers and thread numbers are different. Thread numbers are prefixed with a "t" whereas comment numbers are not. Also note
that comment numbers are global. When comments are created from different topics, the comment number is incremented. Thus no comment
will ever share the same number. Also, the maxlength of comments are 500 characters.

I have come up with two extra features that I believe will be nice and handy to have for the site. These features can be found 
in the top right corner of the website, in a link called "Account". If the user clicks on the link, it will take the user to his/her
account settings page. Within the page, the user can set his/her settings. There are two options on the page, which correspond to 
the two extra features implemented for the site. The options are available on the table.

On the right is an option that allow the users to post with either their usernames or with a general anonymous username 
"Anon" (short for anonymous if you didn't notice). The reason for this is that it would be interesting to see what kinds of post 
users will make if anonymous. Of course, it is up to the users to decide whether to stick with their usernames or go with the 
general anonymous crowd. But the choice isn't permanent either, so users can freely switch back and forth whenever they want to. The
option is in the form of two radio buttons, one for "Anon" and the other for his/her username. The user picks one and press the 
"Select!" button below it. Afterward, the user should be able to see whether he/she will be posting with his/her username or as 
"Anon" from the message shown below the table. When the user first created his/her account, the default setting will be "Anon".
After the user's selection, his/her setting will remain the same even after logging out and logging back in.

On the left is an option that allows the users to select a theme for the website. There is a drop down menu that shows all the
different kinds of colors available to the users. Currently the list consists of the following colors: white, black, red, orange,
yellow, green, blue, purple, and violet. The default theme is white, which is decided when the user created his/her account. The 
reason for this feature is to "spice" up the website by adding some different color besides white. I believe it is always a good 
idea to allow the user to customize the website the way he/she wants. The color of the tables and comments remain the same, 
although in the future that may change. Customization is always a plus. Once the user selects a color and presses the "Select!" 
button, the background color will change according to the color the user had selected. With the exception of black and white, the 
other colors are sort of the pastel versions, where the colors are much softer and easier for the eyes in my opinion. Similar to the
first feature, after the user's selection, his/her setting will remain the same even after logging out and logging back in. This
means that the background color the user has chosen will remain the same for all pages when the user is logged in. When the
user is logged out, the background color will revert back to default (white) until the user logs back in. 

To summarize, neatBoard is an online discussion website/message board. Users are able to go to different subjects, create and 
view topics within each subject, and post comments within each topic. The users are given the choice to post as "Anon" or with their
usernames. The users can select a theme to apply to the website. When testing this software, there are some things to note. The 
settings are similar to that of pset7. The project lies within vhosts directory of the appliance. Make sure that directories 
vhosts, project (the name of the directory where the project is being held), public, and directories within public are world-
executable. The contents of the directories within public should be world-readable.  Set the right permissions (chmod 600 php files,
chmod 644 non-php files, chmod 711 directories). Add "127.0.0.1 project" at the bottom of the file "/etc/hosts". Go to 
http://project/phpMyAdmin using Chrome inside the of appliance to access phpMyAdmin. Log in as John Harvard if prompted (with a 
username of jharvard and a password of crimson). This project uses a MySQL database and attached is a project.sql file that one
can import with. Lastly, I had to set the output_buffering from "4096" to "On" in the php.ini file in order to fix the "Warning: 
Cannot modify header information - headers already sent by..." warning. With all that said and done, I hope you enjoy your time with
neatBoard!
