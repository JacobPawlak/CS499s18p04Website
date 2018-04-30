# CS499, Spring 2018, Project 04 (Website)
**Team members**:
* Isaac Cook
* Aaron Mueller
* Jacob Pawlak
* Jordan Samuels

**TODO**:
* Apply Bootstrap to beautify our sign-in and query pages
* Create user-password/user-warehouse database for user
authentication and proper database access permissions
* Data security fixes (stretch goals)

**Main site**: http://cs.uky.edu/~jcpa229/CS499s18p04Website/#

# Website for the AnyWare Chat Bot
This repository contains all of our website code---including our web report page.
The sign-in functionality is hosted within `Sign-in.php`. Upon a successful login,
the user will be taken to a page where they may query the chatbot (`querry.php` [sic]).
The database that the chat bot accesses will be dependent on which warehouse(s) a
specific user has access to (this information will be stored in a database which associates
users to their accessible databases).

The state of the website is still fairly primitive. Our team has been focusing primarily
on chat bot functionality, for that is the primary feature of our project. The website
will primarily function as a host for the chatbot.
