<?php

include 'conn.php';

?>

<style>
body {
    background-color: #4c3151;
    color: #EBEBEB;
}

.form-control {
  display: block;
  width: 100%;
  height: calc(1.5em + 0.75rem + 2px);
  padding: 0.375rem 0.75rem;
  font-size: 1rem;
  font-weight: 400;
  line-height: 1.5;
  color: #495057;
  background-color: #fff;
  background-clip: padding-box;
  border: 1px solid transparent;
  border-radius: 0px;
  -webkit-transition: border-color 0.15s ease-in-out, -webkit-box-shadow 0.15s ease-in-out;
  transition: border-color 0.15s ease-in-out, -webkit-box-shadow 0.15s ease-in-out;
  transition: border-color 0.15s ease-in-out, box-shadow 0.15s ease-in-out;
  transition: border-color 0.15s ease-in-out, box-shadow 0.15s ease-in-out, -webkit-box-shadow 0.15s ease-in-out;
}


textarea.form-control {
  height: auto;
}

.opslaan {
  color: #fff;
  background-color: #5cb85c;
  border-color: #5cb85c;
  margin-top: 20px;
}
.btn {
  display: inline-block;
  font-weight: 400;
  color: #EBEBEB;
  text-align: center;
  vertical-align: middle;
  cursor: pointer;
  border: 1px solid transparent;
    border-top-color: transparent;
    border-right-color: transparent;
    border-bottom-color: transparent;
    border-left-color: transparent;
  padding: 0.375rem 0.75rem;
  font-size: 1rem;
  line-height: 1.5;
}
.terugknop {
    background-color:	#7fcdff;
    font-family: "Lato", -apple-system, BlinkMacSystemFont, "Segoe UI", Roboto, "Helvetica Neue", Arial, sans-serif, "Apple Color Emoji", "Segoe UI Emoji", "Segoe UI Symbol";
    color: #FDFEFF;
    padding: 5px;
    padding-left: 15px;
    padding-right: 15px;
    margin: 5px;
}
.terugknop:hover {
    padding: 7px;
    padding-left: 17;
    padding-right: 17px;
    margin: 3px;
    cursor: pointer;
}

</style>
