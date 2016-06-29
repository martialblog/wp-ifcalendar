[![Build Status](https://travis-ci.org/martialblog/wp-ifcalendar.svg?branch=master)](https://travis-ci.org/martialblog/wp-ifcalendar)

# Wordpress International Fixed Calendar
A simple Wordpress Plugin to convert all your (Frontend) Gregorian Dates to International Fixed Calendar Dates.

**However:** It doesn't follow the Moses Cotsworth conventions. Rather it implements a model proposed by Dave Gorman.

This model does not only fix the mathematical issue of the Gregorian calender, but also the linguistical. More at:
http://gormano.blogspot.de/2008/01/problem-solving.html

## Background
The Months (with 28 Days each) are:
- March
- April
- May
- June
- Quintilis
- Sextilis
- September
- October
- November
- December
- January
- February
- Sol

This gives the year 364 Days, therefore we add a *Year Day* at the end of the year.

## TODO
- Refactor a bit - function is way too large
- Add more tests - May first and last of every month, plus leap years
- Check of more hooks are required
- Translations maybe
