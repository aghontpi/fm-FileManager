<?php 
/*
FileName:index.php
Desscription:Default page,
Author:bluepe (aka)Gopinath,
CreationDate:30-AUG-2018,
*/

/*
config section.
*/
interface config{
    const hashForLogin = 'sha256';
    /*
    Desc:sha256 with 10000 rounds.
    */
    const hash = '$6$rounds=10000$fm-filemanager$2i9wK36ODOnmaBz6KT/pQKKEplOWtPBofN.vCYUYRjy0UJCnnK2GajkhhVMxWi1dEF.r/El/SxJq5RiRBSw8l/';
}

/*
Images section:
*/
interface images{
    const folderIcon = 'data:image/png;base64,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';
    const folderImage = "<img src='" . images::folderIcon ."' width='10'/>";

    const fileIcon = "data:image/png;base64,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";

    const fileImage = "<img src='" . images::fileIcon ."' width='10'/>";
}



/*
HTML section.
*/
interface html{

const topSection = "
                    <!DOCTYPE html>
                        <head>
                            <title>
                                fm - FileManager.
                            </title>
                            "
                            .
                            html::headStyle
                            .
                        "
                        </head>
                        <body>
                    ";
                    

const bottomSection = "</body>
                        </html>
                        ";

const loginSection = "
                    <div class='login-container'>
                        <div class='logo'>
                            <h3>fm-fileManager</h3>
                        </div>
                        <div class='form-container'>
                            <form method='POST' action='index.php/login'>
                                <br>
                                <input type='text' placeholder='username' autocomplete='off'>
                                <input type='password' placeholder='password' autocomplete='off'>
                                <br>
                                <button type='submit' class='btn'>Login</button> 
                            </form>
                        </div>
                    </div>   
                    ";
const headStyle = "
                <style>
                    *{  
                    font-family:sans-serif;
                    }
                    .login-container{
                        margin:0 auto;
                        margin-top:10%;
                        width:250px;
                    }
                    .logo{
                        text-align:center;
                    }
                    .form-container{
                        text-align:center;
                    }
                    .form-container form input{
                        padding:5px;
                        margin:5px;
                        width:200px;
                        background-color:white;
                    }
                    .btn{
                     width:100px;
                     padding:5px;
                     border-radius:5px;
                    }

                </style>
                  ";
}

/*
className:fm,
Desc:core class responsible for everything.
created date:30-AUG-2018;
*/
class fm  extends utilities implements images, html{
    public $dir;

    /*
    Author:bluepe (aka)Gopinath,
    Description:initialises the utilities constructor,setup html document till body,
    created date:2-oct-2018,
    */
    public function __construct(){
        parent::__construct();
        $this->scriptLocation = $_SERVER['HTTP_HOST'] . dirname($_SERVER['PHP_SELF']);
        echo html::topSection;
    }

    /*
    Author:bluepe (aka)Gopinath,
    Description:End html document,,
    created date:2-oct-2018,
    */
    public function __destruct(){
        echo html::bottomSection;
    }

    /*
    FunctionName:displayPre,
    Param:array or var,
    Author:bluepie,
    Descrption:function to display the desired variable with the pre tag,
    Created data: 30-AUG-2018,
    */
    public static function displayPre($var){
        echo "<pre>"; print_r($var) ; echo "</pre>";
    }

    /*
    FunctionName:getDir&File,
    Param:the directiry to iterate.
    Author:bluepie,
    Descrption:get all files &directories from current directory,
                %2F representation in broswer is due to url encoding
                meaning '/',
    returns:td for each row with (
                                links,  
                                imgages, 
                                lastmodified date,
                                fileowner,
                                file/directory name
                                ),
    Created data: 30-AUG-2018,
    last-modified:3-OCT-2018,
    */
    public function getDirFile($dir=null){
        if(is_null($dir)){ $dir = $_SERVER['DOCUMENT_ROOT']; }
        $fData = "";
        foreach (new DirectoryIterator($dir) as $files) {
            $fileWithImage =  ($files->isDir())? 
                                    $this->getLinkWithText( 
                                                (images::folderImage . " " .$files->getFilename()), 
                                                $this->generateQueryString(
                                                            'folder'
                                                            ,$files->getPath() .'/' .$files->getFilename()
                                                            )
                                                ) 
                                    : images::fileImage . " " .$files->getFilename();

            $lastModified = "<td align='center'>" .
                                date("h-i-s g:i a",
                                $files->getMTime()) .
                            "</td>";
            $fileIOwner = "<td align='center'>" .
                                posix_getpwuid($files->getOwner())['name'] .
                            "</td>";
            $fData = $fData ."<tr> 
                                <td>".
                                $fileWithImage . 
                                "</td>" . 
                                $lastModified . 
                                $fileIOwner .
                            "</tr>";
        }
        return $fData;

    }

    /*
    FunctionName:tableStructure,
    Param:files with tr included in them.
    Author:bluepie,
    Descrption:all files with name, modified date, owner etc.,
    Created data: 2-SEP-2018,
    */
    public function tableStructure($fData){
        echo "<table>
                  <tr>
                    <th width='50%' align='left'>name</th>
                    <th width='10%'>last modified</th>
                    <th width='10%'> owner</th>
                  </tr>" .
                  $fData .
              "</table>";
    }
    

    

}

/*
className:utilities.
Description:necessary things are created when object creation;
Created date:2-OCT_2018,
*/
class utilities{

    private $linkTofile;
    /*
    Author:bluepe (aka)Gopinath,
    Description:constructor for utilities.
    created date:2-oct-2018,
    */
    protected function __construct(){
        $this->linkTofile  = '<a href=' . $_SERVER['PHP_SELF'] ;
    }

    /*
    FunctionName:getLinkWithText,
    Author:bluepe (aka)Gopinath,
    Description:get the linked file with custom text inside,
    Param:$linkText - the desired name,querySting - folder locations,
    Returns: the link with the specified filename/foldername,
    created date:2-oct-2018,
    */

    protected function getLinkWithText($linkText,$queryString=''){
        return $this->linkTofile . $queryString . '>'. $linkText . '</a>';
    }

    /*
    Author:bluepe (aka)Gopinath,
    Description:construct query string.,
    Param:$query,value,
    Returns: query string with value,
    created date:3-oct-2018,
    */
    protected function generateQueryString($queryString,$value){
        return '?'.http_build_query(array($queryString=>$value));
    }
}

/*
className:authHelper.
Description:
            Handles things related to session, 
            authenticating user,
Created date:13-OCT_2018,
*/
class authHelper implements html, config{
    /*
    Author:bluepe (aka)Gopinath,
    Description:
                constructor for authHelper,
                start the seesion/continue the session by default,
    created date:13-oct-2018,
    */
    public function __construct(){
        session_start();
        /*
        Desc:checking if this is a login request.
        */
        if($_SERVER['REQUEST_METHOD']=='POST' 
            && 
            ltrim($_SERVER['PATH_INFO'],'/') == 'login')
                {
                    //check for authenticated user.
                }
    }

    /*
    FunctionName:checkSession,
    Author:bluepe (aka)Gopinath,
    Description:to check session,
    Param:-,
    Returns: boolean, if authenticated user or not,
    created date:13-oct-2018,
    */
    public function checkSession(){
       return empty($_SESSION['authUser'])? false : true;
    }

    /*
    FunctionName:restrictAccess,
    Author:bluepe (aka)Gopinath,
    Description:To not permit to access content
    Param:-,
    Returns:-
    created date:13-oct-2018,
    last modified on:15-oct-2018.
    */
    public function restrictAccess(){
        $this->renderHtml("You are not authorized to access this content");
        die();
    }

    /*
    FunctionName:redirectToLogin,
    Author:bluepe (aka)Gopinath,
    Description:route the user to login page.
    Param:-,
    Returns:-,
    created date:13-oct-2018,
    */
    public function redirectToLogin(){
        $this->renderHtml(html::loginSection);
        die();
    }

    public function performLogin(){
        hash_equals(config::hash,crypt('admin','$6$rounds=10000$fm-filemanager$'));
    }

    /*
    FunctionName:renderHtml,
    Author:bluepe (aka)Gopinath,
    Description:render the html with top, middle and bottomn
    Params: bodySection -  The body section. main content to display.
    Returns:-,
    created date:15-oct-2018,
    */
    protected function renderHtml($bodySection){
        echo html::topSection;
        echo $bodySection;
        echo html::bottomSection;
    }
}


/*
Desc:For handling authentication.
*/
$_OauthHelper = new authHelper();
if(!$_OauthHelper->checkSession()){
    
    $_OauthHelper->redirectToLogin();

    /*
    Desc:
        restrict access.
        later use for ipspecific blocking/toomanylogin attempts.
    $_OauthHelper->restrictAccess();
    */
}
else{

}


/*
Desc:Check for any post or get variables.
*/
$path = NULL;
if(isset($_GET['folder'])){
    $path = $_GET['folder'];
}

/*
Object Section.
*/
$fmObj = new fm();
$fmObj->displayPre("script located in: ".$fmObj->scriptLocation);
$fmObj->tableStructure($fmObj->getDirFile($path));
 ?>