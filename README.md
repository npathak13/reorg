Reorg CaseStudy
=========

Anytime a doctor accepts things like lunches, gifts, etc. that cost greater than $10 dollars this has to be reported.  Below is the site the contains all the data:
https://openpaymentsdata.cms.gov/dataset/General-Payment-Data-Detailed-Dataset-2014-Reporti/mw4g-bs44
 
Note you may need to register to get to this URL.
 
I would like you to use this data to create a small site that imports this data.  Make sure this script can run over and over again to get the most recent updates.  Build a search tool with a typeahead that returns all relevant data.  When search results are returned build an export to Excel feature.  Make sure that this outputs to a XLS file.
 
Please post your work to a Github repository and I will pull it down locally and try it out.  Please be sure to include a database creation script and instructions for how to setup the system.  You can choose to use any framework or not use a framework at all.


Setup Instructions
=========
1) Clone repository into webroot

2) Navigate to the directory created by git clone

3) Run composer install  (note: Download Composer if you don't already have it https://getcomposer.org/download/)

4) Create a MySQL Database for the application to connect to. 

5) Update app/config/parameters.yml AND/OR app/config/parameters.yml.dist with the database connection information

6) Run app/console doctrine:schema:update --dump-sql from within the application directory (reorg, unless you renamed it) to view the database creation script. If everything looks good, run app/console doctrine:schema:update --force and your database table will be set up.

7) Run app/console server:start

8) Navigate to 127.0.0.1:8000 to access the application.

9) Click "Check Data For Updates" to import the initial data set. Alternatively I've included a console command that will also import the data. Large datasets will cause the HTTP to time out, running it from the console will allow you to import larger sets of data. You can run the command by typing app/console app:import:data into the main application directory. 