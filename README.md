# RandomDots
Scrutinizer<br>
[![Scrutinizer Code Quality](https://scrutinizer-ci.com/g/elminson/RandomDots/badges/quality-score.png?b=master)](https://scrutinizer-ci.com/g/elminson/RandomDots/?branch=master)
[![Build Status](https://scrutinizer-ci.com/g/elminson/RandomDots/badges/build.png?b=master)](https://scrutinizer-ci.com/g/elminson/RandomDots/build-status/master)
[![Code Intelligence Status](https://scrutinizer-ci.com/g/elminson/RandomDots/badges/code-intelligence.svg?b=master)](https://scrutinizer-ci.com/code-intelligence)

[![Codacy Badge](https://api.codacy.com/project/badge/Grade/6bef375c73a041ddaf96533b9f220af1)](https://app.codacy.com/app/elminson/RandomDots?utm_source=github.com&utm_medium=referral&utm_content=elminson/RandomDots&utm_campaign=Badge_Grade_Dashboard)

Function to add one or more dots in a ramdom position of a string 
Validation
//the dots can’t be consecutive position
//The dots can’t be in the first position

placeDot($string, 2);  //String == string, 2 == number of dots
ex. placeDot(“Hello there”,2); ==> should Return => “H.ello Th.ere” or “He.llo T.here”
