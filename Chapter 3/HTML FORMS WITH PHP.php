<?php
/**
 * Created by PhpStorm.
 * User: wedie_000
 * Date: 7/11/2017
 * Time: 9:56 PM
 */

    //Text field
    echo ("Enter Your name: <br/> <input type=\"text\" name=\"Name\"/><br/>");
    echo ("Enter Your weight: <br/> <input type=\"text\" name=\"Weight\"/><br/>");
    echo ("Enter Your height: <br/> <input type=\"text\" name=\"Height\"/><br/>");

    //Selection
    echo("Select sex: <br/>");
    echo("<select name=\"sex\">");
    echo("<option>Male</option>");
    echo("<option>Boy</option>");
    echo("<option>Female</option>");
    echo("<option>Girl</option>");
    echo("</select><br/><br/>");
    echo("Select size:<br/>");

    //Option:
    echo("<input type=\"radio\" name=\"size\" value=\"small\" />Small<br/>");
    echo("<input type=\"radio\" name=\"size\" value=\"medium\" />Medium<br/>");
    echo("<input type=\"radio\" name=\"size\" value=\"large\" />Large<br/>");
    echo("<br/><br/><input type=\"submit\" name=\"submit\" value=\"Submit\" \>");

    echo("<br/><br/><input type=\"reset\" name=\"clear\" value=\"Clear\" />");
    echo("</form>");


?>
<html>
    <header>
        <title>Post Method</title>
    </header>

    <body>
        <h1>POST method</h1>
        <br>
        <form method="post" action="post.php">
            <!--We have input, so show.php is our output-->
            <h2>Person</h2>
            <table>
                <tr><th>Name</th>
                    <td>  <input type="text" name="givenName" size="30" /></td></tr>
                <tr><th>Age</th>
                    <td>  <input type="text" name="givenAge" size="30" /></td></tr>
                <tr><th>Weight</th>
                    <td>  <input type="text" name="givenWeight" size="30" /></td></tr>
            </table>
            <p><input type="submit" name="submit" value="Submit" />
                <input type="reset" name="clear" value="Clear" /></p>
        </form>

        <!--
            - Variables sent with HTTP POST are not shown in the URL
            - Variables have no length limit
            - However, because the variables are not displayed in the URL, it is not possible to bookmark the page.
        -->

        <h1>GET method</h1>
        <form method="get" action="get.php">
            <h2>Person</h2>
            <table>
                <tr><th>Name</th>
                    <td>  <input type="text" name="givenName" size="30" /></td></tr>
                <tr><th>Age</th>
                    <td>  <input type="text" name="givenAge" size="30" /></td></tr>
                <tr><th>Weight</th>
                    <td>  <input type="text" name="givenWeight" size="30" /></td></tr>

            </table>
            <p><input type="submit" name="submit" value="Submit" />
                <input type="reset" name="clear" value="Clear" /></p>
        </form>

        <!--
            - When using the $_GET, all variable names and values are displayed in the URL. This method should not be used when sending passwords or other sensitive information! However, because the variables are displayed in the URL, it is possible to bookmark the page. This can be useful in some cases.
            - The HTTP GET method is not suitable on large variable values; the value cannot exceed 100 characters.
        -->

    </body>

</html>
