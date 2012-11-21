The code from ../index.php demands that the file "tryit_view.html" be
world writeable to allow the user to edit and re-run the file. For
security reasons, we normally turn this off. Which means that the user
can change the file in the browser, but when s/he hits "Run", it will
reset to what is stored in the file (since it does a file read).
