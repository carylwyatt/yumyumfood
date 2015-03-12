 <!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
 <html xmlns="http://www.w3.org/1999/xhtml" lang="en-US" xml:lang="en-US">
 <head>
<title>Form Output</title>
 </head>
 <body>
thanks, <?php echo htmlspecialchars($_POST['name']); ?>, for telling me your name and that
you are <?php echo htmlspecialchars($_POST['age']); ?>.
</body>
</html>