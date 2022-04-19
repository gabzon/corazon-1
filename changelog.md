# v0.2.9: Tuesday 19, April 2022
* Organization admin table: removed email, styles added, break-normal
* Organization admin table: type added

# v0.2.8: Thursday 14, April 2022
* Api Resource image = event->coverImage
* Event show: change getfirstmedia by coverimage

# v0.2.7: Thursday 07, April 2022
* Start time api debugged
* Events disappear from catalogue with datimetime comparason
* Orion Installed

# v0.2.6: Friday 04, Feb 2022
* City user_id required fixed
* Fixed bug with lesson creation, conflict btw events and courses
* Reset courses catalogue day fixed
* Dropdow only displays actives courses or events
* Catalogue Filters order asc by shortname
* Edit organization: redirect view button fixed
* Fix school profile

# v0.2.5: Friday 11th, Feb 2022
* Organization Profile: Course Query only class
* Organization Profile: Events Query status active and sortby start_date
* Event edit form: admin can add/edit/delete one or many workshops
* Course edit form: admin can add/edit/delete an event

# v0.2.4: Thursday 10th Feb, 2022
* Course Dashboard > Registered Table: Admin can search by name, email, username
* Course Dashboard > Registered Table: Admin can filter by gender
* Course Dashboard > Registered Table: Admin can filter by status
* Course Dashboard > Registered Table: Admin can filter by role
* Course Dashboard > Registered Table: When admin clicks on user avatar it opens up slideover with user info
* Avatar username component: Changed email for username
* Show Event page debugged
* Admin Event Index: filters outside table
* Admin Event Index: is recurrent filer added
* Event edit: is recurrent added to events
* Bookmark button: new design
* Favorite button: new design
* Course Dashboard info: organization redirection
* Admin users index: fixed search filter
* Admin users index: gender filter added
* Members table: search by user, by gender, by role filters added 


# v0.2.3: Wednesday 2th Feb, 2022
* getRegistrationRole bug when adding a lesson
* Importing a facebook event bug when creating a city fixed 
* Select User livewire component
* remove link to user profile from avatar component

# v0.2.2: Tuesday 1st Feb, 2022
* Add space debugged: Classroom naming
* Course show: push down promo video 
* Course show: fix scroll to the bottom
* Course show: classroom changed from Studio/Room
* Course show: focus school reordered
* Courses form level fixed
* Courses form: Focus level default value fixed
* Courses form: Selfwork to Solo
* Organization profile page: only authorized can see status and type
* Organization profile page: styles added
* Event card max-w-xs


# v0.2.1: Sunday 30th, 2022
* Defer loading welcome page events
* Latests Events view all button filters according to the type
* Add with media in welcome events queries
* Facebook login button hiddent

# v0.2.0: Thursday 26th, 2022
* Logout button fixed on mobile navbar
* Logout button fixed on sidebar app
* Fixed responsive menu
* Verify email
* Login/Reset password/forgot password/confirm password layouts changed to auth layout
* Course Dashboard: add lesson button can only be seen if user = super or manager
* If status is invited display register button
* Events catalog: reset button added
* Events catalog: async with loading message added
* Weekly-Registrations: debug unique query
* invitee button fixed
* Registered-table fixed

# v0.1.30: Monday 24th, 2022
* Landing page: Typo Croatia
* Landing page: Typo latests

# v0.1.29: Sunday 23th, 2022
* Welcome page: buttons to lastest events and find courses added

# v0.1.28: Friday 21th, 2022
* User prefered styles form added

# v0.1.27: Thursday 20th, 2022
* Events table: private_group_url field added
* Courses table: private_group_url field added
* Registration Service: check if exists, if already registered, if registereed in organization, register according status, room capacity, check parity
* Add styles to videos
* Remove file-uploads from trix

# v0.1.26: Wednesday 19th, 2022
* Last login + Last Ip address when users login
* A user can like an organization
* Roles CRUD 
* Roles Seeder
* User Profile favorites page redesigned

# v0.1.25: Tuesday 18th, 2022
* bookmark & favorite button redesigned without bg-color
* Event show: if not location then no show
* User can favorite a lesson
* User profile page
* User required data when register birthday field fixed

# v0.1.24: Monday 17th, 2022
* Users can have multiple roles for an organization
* User roles for an organization can be edited

# v0.1.23: Friday 14th, 2022
* Styles Form component added to Courses and Organization

# v0.1.22: Thursday 13th, 2022
* User Registration Panel component created
* Add user to org during registration
* Various css fixes

# v0.1.21: Wednesday 12th, 2022
* Course table: private_group_url
* Course Catalogue Card: Level code added
* Registered-Table: edit button hidden from regular users
* Type of course form component changed to lowercase letters
* Course Show: fixed sidebar debbuged
* Course Dashboard registrations link fixed
* Course Dashboard: mobile menu added
* Button Component created
* Link Component created
* Course index: responsive improvements (margin x and compact filters)

# v0.1.20: Tuesday 11th, 2022
* Responsive menu
* Registered table with datetime
* rights to instructors

# v0.1.19: Friday 7th, 2022
* Back button
* Registration/Bookmark/Like buttons livewire
* Events catalogue
* Courses cataloque

# v0.1.18: Thursday 6th, 2022
* Profile: This week fixed
* App sidebar navigation: regular users cannot see to admin buttons
* Events card: registration/like/bookmark buttons added
* User-dropdown: hide admin likes from unauthorize users
* Edit button hidden from unauthorized users in course/event show
* login page: create account link added
* Required user data: username fixed
* User phone number validation added
* is_private field added to course and events
* Event show: if less than 24h do not display 2nd date if more than 24 do not display end time

# v0.1.17: Wednesday 5th, 2022
* Event show: display organisers 
* Login and create account buttons fixed on event/course show
* Profile likes: Redirect to registration if empty
* Display like button only if person is registered or partial
* Development alert message
* Profile account: attachments removed
* Profile account: address added
* Users table: nationality added
* Event/Course table: registration_url column added
* Sidebar menu: bookmark and likes fixed
* Edit profile: biography error
* Course/Event show: inside app layout
* User profile uses photo

# v0.1.16: Tuesday 4th, 2022
* Create event: when start date is added it automatically fills end date
* Event show: label place/location changed for venue
* Event form: when city selected location is filtered
* Registrable interface
* Likeable interface
* Bookable interface

# v0.1.15: Monday 3th, 2022
* Course info page
* Dashboard improvements
* Course dashboard student page
* Course registered tabled

# v0.1.14: Thursday 16th, 2021
* Organization CRUD form refactored
* Event Items list images rounded corners added

# v0.1.13: Monday 13th, 2021
* yts imported https://www.facebook.com/ytsfestival

# v0.1.12: Thursday 9th, 2021
* User registration bug
* Courses seeders
* Add Gloria classes to seeders

# v0.1.11: Wednesday 8th, 2021
* Locations index: Filters added to locations table
* City duplication bug
* Event can add image

# v0.1.10: Tuesday 7th, 2021
* Locations seeder

# v0.1.9: Sunday 28th, 2021
* Rename Classroom Table to Space table
* Likes added to user dashboard
* Interests added to user dashboard
* Registrations added to user dashboard

# v0.1.9: Friday 26th, 2021
* User can register to an event
* User can register to a course
* registrable relation
* User can interest an event
* User can interest a course
* Interestable relation
* User can like an event
* User can like a course
* Likeable relation

# v0.1.8: Monday 15th, 2021
* x-cloak on navbar

# v0.1.7: Friday 12th, 2021
* Event table: edit centered aligned
* Event flatpickr debugged
* Pricing livewire component layout improved
* Event page redesign

# v0.1.6: Thursday 11th, 2021
* Redesign of event backend admin
* Event livewire create form
* Event livewire edit: default form
* Event livewire edit: options form
* Event livewire edit: pricing form
* Event livewire edit: social media form
* Event livewire edit: contact form
* Location table city name optional
* migration event date type changed to datetime

# v0.1.5: Wednesday 10th, 2021
* city Index: Default order Alphabetically
* city Index: Filter Admin City table by name
* city Index: Filter Admin city table by state
* city Index: Filter Admin city table by region
* city Index: Filter Admin city table by country
* city Index: Add column number of events
* city Show: Bug:getUrl() => Create component to view mediaLibrary images
* city Show: delete city
* city Index: city id column added
* city Index: Add column number of courses
* city Index: table min-w-full
* event index: filters

# v0.1.4: Tuesday November 9th, 2021
* Media library Image component updated with label field 

# v0.1.3: Wednesday August 4th, 2021
* Fixed styles scroll down
* Catalog page
* Classroom improvements
* Fixed bug dates in courses
* guest can see courses
* event list design improvements
* Courses card improvments
* Dropping + dropping added to migration

# v0.1.2: Saturday july 31, 2021
* Text for email added
* Courses removed
* Various improvements for sharing first launch version

# v0.1.1: Monday July 5th, 2021
* Welcome pattern color changed
* Display message if there is no events
- Displya messsage if there is no courses
- Display all events with filters
- Sort Events by date
- If date > today change status to expired 


# v0.1.0: Sunday June 27th, 2021
* Import from facebook

# v0.0.9: Friday June 25th, 2021
* User avatar is now facebook
* dashboard view
* show social media event detail page
* Event detail page change order of display on mobile
* Landing page with login button


# v0.0.8: Monday June 07, 2021
* icon to date input added
* datepicker display fixed

# v0.0.7: Sunday 17 May 2021
* Livewire Thumbnail component
* Trix component (rich editor)

# v0.0.6: Monday 10 May 2021
* Datepicker component using Pikaday.js

# v0.0.5: Friday 7 May 2021
* User select component

# v0.0.4: Tuesday 27 March 2021
* Post CRUD finished
* Post view finished

# v0.0.3: Monday 26 March 2021
* Livewire Thumbnail Component finished