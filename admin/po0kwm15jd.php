<?php

define("ROOTPATH", dirname(__DIR__));
define("APPPATH", ROOTPATH."/php/");

require_once ROOTPATH . '/includes/autoload.php';
require_once ROOTPATH . '/includes/lang/lang_'.$config['lang'].'.php';

$con = db_connect($config);
admin_session_start();
if (!isset($_SESSION['admin']['id'])) {
    exit('Access Denied.');
}

//Admin Ajax Function
if(isset($_GET['action'])){

    if ($_GET['action'] == "installPayment") { installPayment(); }
    if ($_GET['action'] == "uninstallPayment") { uninstallPayment(); }
    if ($_GET['action'] == "installCountry") { installCountry(); }
    if ($_GET['action'] == "uninstallCountry") { uninstallCountry(); }

    if ($_GET['action'] == "deleteCountry") { deleteCountry(); }
    if ($_GET['action'] == "deleteState") { deleteState(); }
    if ($_GET['action'] == "deleteDistrict") { deleteDistrict(); }
    if ($_GET['action'] == "deleteCity") { deleteCity(); }

    if ($_GET['action'] == "deleteStaticPage") { deleteStaticPage(); }
    if ($_GET['action'] == "deletefaq") { deletefaq(); }
    if ($_GET['action'] == "delcoustomfield") { delcoustomfield(); }
    if ($_GET['action'] == "approveitem") { approveitem(); }
    if ($_GET['action'] == "approveResubmitItem") { approveResubmitItem(); }
    if ($_GET['action'] == "activeuser") { activeuser(); }
    if ($_GET['action'] == "banuser") { banuser(); }

    if ($_GET['action'] == "deleteCurrency") { deleteCurrency(); }
    if ($_GET['action'] == "deleteTimezone") { deleteTimezone(); }
    if ($_GET['action'] == "deleteNoresult") { deleteNoresult(); }
    if ($_GET['action'] == "deleteMembershipPlan") { deleteMembershipPlan(); }
    if ($_GET['action'] == "deletePackage") { deletePackage(); }
    if ($_GET['action'] == "deleteLanguage") { deleteLanguage(); }
    if ($_GET['action'] == "deleteadmin") { deleteadmin(); }
    if ($_GET['action'] == "deleteMessage") { deleteMessage(); }
    if ($_GET['action'] == "deleteProject") { deleteProject(); }
    if ($_GET['action'] == "deleteads") { deleteads(); }
    if ($_GET['action'] == "deleteResubmitItem") { deleteResubmitItem(); }
    if ($_GET['action'] == "deleteTransaction") { deleteTransaction(); }

    if ($_GET['action'] == "deleteTaxes") { deleteTaxes(); }
    if ($_GET['action'] == "addPlanCustom") {addPlanCustom();}
    if ($_GET['action'] == "editPlanCustom") {editPlanCustom();}
    if ($_GET['action'] == "delPlanCustom") {delPlanCustom();}
    if ($_GET['action'] == "langTranslation_PlanCustom") { langTranslation_PlanCustom(); }
    if ($_GET['action'] == "edit_langTranslation_PlanCustom") { edit_langTranslation_PlanCustom(); }

    if ($_GET['action'] == "edit_langTranslation") { edit_langTranslation(); }
    if ($_GET['action'] == "langTranslation_PostTypes") { langTranslation_PostTypes(); }
    if ($_GET['action'] == "edit_langTranslation_PostTypes") { edit_langTranslation_PostTypes(); }
    if ($_GET['action'] == "langTranslation_SalaryTypes") { langTranslation_SalaryTypes(); }
    if ($_GET['action'] == "edit_langTranslation_SalaryTypes") { edit_langTranslation_SalaryTypes(); }
    if ($_GET['action'] == "langTranslation_FormFields") { langTranslation_FormFields(); }
    if ($_GET['action'] == "edit_langTranslation_custom_fields") { edit_langTranslation_custom_fields(); }
    if ($_GET['action'] == "CustomField_langTranslation_FormFields") { CustomField_langTranslation_FormFields(); }

    if ($_GET['action'] == "addNewCat") { addNewCat(); }
    if ($_GET['action'] == "editCat") { editCat(); }
    if ($_GET['action'] == "deleteCat") { deleteCat(); }

    if ($_GET['action'] == "addSubCat") { addSubCat(); }
    if ($_GET['action'] == "editSubCat") { editSubCat(); }
    if ($_GET['action'] == "delSubCat") { delSubCat(); }
    if ($_GET['action'] == "getSubCat") { getSubCat(); }

    if ($_GET['action'] == "addPostType") { addPostType(); }
    if ($_GET['action'] == "editPostType") { editPostType(); }
    if ($_GET['action'] == "delPostType") { delPostType(); }

    if ($_GET['action'] == "addSalaryType") { addSalaryType(); }
    if ($_GET['action'] == "editSalaryType") { editSalaryType(); }
    if ($_GET['action'] == "delSalaryType") { delSalaryType(); }

    if ($_GET['action'] == "deleteCompany") { deleteCompany(); }
    if ($_GET['action'] == "deleteResume") { deleteResume(); }

    if ($_GET['action'] == "openlocatoionPopup") { openlocatoionPopup(); }
    if ($_GET['action'] == "getlocHomemap") { getlocHomemap(); }

    if ($_GET['action'] == "editLanguageFile") { editLanguageFile(); }

    if ($_GET['action'] == "saveBlog") { saveBlog(); }
    if ($_GET['action'] == "deleteBlog") { deleteBlog(); }
    if ($_GET['action'] == "approveComment") { approveComment(); }
    if ($_GET['action'] == "deleteComment") { deleteComment(); }
    if ($_GET['action'] == "addBlogCat") { addBlogCat(); }
    if ($_GET['action'] == "editBlogCat") { editBlogCat(); }
    if ($_GET['action'] == "delBlogCat") { delBlogCat(); }

    if ($_GET['action'] == "deleteTestimonial") { deleteTestimonial(); }

}

if(isset($_POST['action'])){
    if ($_POST['action'] == "quickad_update_maincat_position") { quickad_update_maincat_position(); }
    if ($_POST['action'] == "quickad_update_subcat_position") { quickad_update_subcat_position(); }
    if ($_POST['action'] == "quickad_update_post_type_position") { quickad_update_post_type_position(); }
    if ($_POST['action'] == "quickad_update_salary_type_position") { quickad_update_salary_type_position(); }
    if ($_POST['action'] == "quickad_update_blog_cat_position") { quickad_update_blog_cat_position(); }
    if ($_POST['action'] == "quickad_update_custom_field_position") { quickad_update_custom_field_position(); }
    if ($_POST['action'] == "quickad_update_custom_option_position") { quickad_update_custom_option_position(); }
    if ($_POST['action'] == "deleteusers") { deleteusers(); }
    if ($_POST['action'] == "getsubcatbyid") {getsubcatbyid();}
    if ($_POST['action'] == "delete_custom_fields") { delete_custom_fields(); }
    if ($_POST['action'] == "delete_custom_option") { delete_custom_option(); }
    if ($_POST['action'] == "save_custom_fields") { save_custom_fields(); }
    if ($_POST['action'] == "getStateByCountryID") {getStateByCountryID();}
    if ($_POST['action'] == "getCityByStateID") {getCityByStateID();}
    if ($_POST['action'] == "getStateByCountryIDforCityAdd") {getStateByCountryIDforCityAdd();}
    if ($_POST['action'] == "getDistrictSelectedforCityAdd") {getDistrictSelectedforCityAdd();}
    if ($_POST['action'] == "searchCityStateCountry") {searchCityStateCountry();}
}

function change_language_file_settings($filePath, $newArray)
{
    $lang = array();
    // Get a list of the variables in the scope before including the file
    $new = get_defined_vars();
    // Include the config file and get it's values
    include($filePath);

    // Get a list of the variables in the scope after including the file
    $old = get_defined_vars();

    // Find the difference - after this, $fileSettings contains only the variables
    // declared in the file
    $fileSettings = array_diff($lang, $newArray);

    // Update $fileSettings with any new values
    $fileSettings = array_merge($fileSettings, $newArray);
    // Build the new file as a string
    $newFileStr = "<?php\n";
    foreach ($fileSettings as $name => $val) {
        // Using var_export() allows you to set complex values such as arrays and also
        // ensures types will be correct
        $newFileStr .= "\$lang['$name'] = " . var_export($val, true) . ";\n";
    }
    // Closing tag intentionally omitted, you can add one if you want

    // Write it back to the file
    file_put_contents($filePath, $newFileStr);

}

function editLanguageFile()
{
    $file_name = $_POST['file_name'];
    $filePath = '../includes/lang/lang_'.$file_name.'.php';

    if(isset($_POST['key'])){
        if(check_allow()){
            $value = stripslashes($_POST['value']);
            $newLangArray = array(
                $_POST['key'] => $value
            );
            if(file_exists($filePath)){
                change_language_file_settings($filePath, $newLangArray);
                echo 1;
                die();
            }
        }
    }
    echo 0;
    die();
}


/**
 * @param $filename
 * @return string
 */
function getFile($filename)
{
    $file = fopen($filename, 'r') or die('Unable to open file getFile!');
    $buffer = fread($file, filesize($filename));
    fclose($file);

    return $buffer;
}

/**
 * @param $filename
 * @param $buffer
 */
function writeFile($filename, $buffer)
{
    // Delete the file before writing
    if (file_exists($filename)) {
        unlink($filename);
    }
    // Write the new file
    $file = fopen($filename, 'w') or die('Unable to open file writeFile!');
    fwrite($file, $buffer);
    fclose($file);
}
/**
 * @param $rawFilePath
 * @param $filePath
 * @param $con
 * @return mixed|string
 */
function setSqlWithDbPrefix($rawFilePath, $filePath, $prefix)
{
    if (!file_exists($rawFilePath)) {
        return '';
    }

    // Read and replace prefix
    $sql = getFile($rawFilePath);
    $sql = str_replace('<<prefix>>', $prefix, $sql);

    // Write file
    writeFile($filePath, $sql);

    return $sql;
}

/**
 * @param $con
 * @param $filePath
 * @return bool
 */

function importSql($con, $filePath)
{

    try {
        $errorDetect = false;

        // Temporary variable, used to store current query
        $tmpline = '';
        // Read in entire file
        $lines = file($filePath);
        // Loop through each line
        foreach ($lines as $line) {
            // Skip it if it's a comment
            if (substr($line, 0, 2) == '--' || trim($line) == '') {
                continue;
            }
            if (substr($line, 0, 2) == '/*') {
                continue;
            }

            // Add this line to the current segment
            $tmpline .= $line;
            // If it has a semicolon at the end, it's the end of the query
            if (substr(trim($line), -1, 1) == ';') {
                // Perform the query
                if (!$con->query($tmpline)) {
                    echo "<pre>Error performing query '<strong>" . $tmpline . "</strong>' : " . $con->error . " - Code: " . $con->errno . "</pre><br />";
                    $errorDetect = true;
                }
                // Reset temp variable to empty
                $tmpline = '';
            }
        }
        // Check if error is detected
        if ($errorDetect) {

        }
    } catch (\Exception $e) {
        $msg = 'Error when importing required data : ' . $e->getMessage();
        echo '<pre>';
        print_r($msg);
        echo '</pre>';
        exit();
    }


    // Delete the SQL file
    if (file_exists($filePath)) {
        unlink($filePath);
    }

    return true;
}

/**
 * Import Geonames Default country database
 * @param $con
 * @param $site_info
 * @return bool
 */
function importGeonamesSql($con,$config,$default_country)
{
    if (!isset($default_country)) return false;

    // Default country SQL file
    $filename = 'database/countries/' . strtolower($default_country) . '.sql';
    $rawFilePath = '../storage/'.$filename;
    $filePath = '../storage/installed-db/' . $filename;

    setSqlWithDbPrefix($rawFilePath, $filePath, $config['db']['pre']);

    return importSql($con, $filePath);
}

function installCountry()
{
    global $con,$config;

    $code = $_POST['id'];
    if (trim($code) != '') {
        if(check_allow()){
            if(importGeonamesSql($con,$config,$code)){
                $con->query("UPDATE `".$config['db']['pre']."countries` set active='1' WHERE `code` = '" . $code . "'");
                echo 1;
            }
            else {
                echo 0;
                die();
            }
        }else{
            echo 1;
            die();
        }
    } else {
        echo 0;
        die();
    }

}

function uninstallCountry()
{
    global $con,$config;

    $code = $_POST['id'];
    if (trim($code) != '') {
        if(check_allow()){
            if(importGeonamesSql($con,$config,$code)){
                $con->query("UPDATE `".$config['db']['pre']."countries` set active='0' WHERE `code` = '" . $code . "'");
                $con->query("DELETE FROM `".$config['db']['pre']."cities` WHERE `country_code` = '" . $code . "'");
                $con->query("DELETE FROM `".$config['db']['pre']."subadmin1` where code like '%".$code."%'");
                $con->query("DELETE FROM `".$config['db']['pre']."subadmin2` where code like '%".$code."%'");
                echo 1;
            }
            else {
                echo 0;
                die();
            }
        }else{
            echo 1;
            die();
        }
    } else {
        echo 0;
        die();
    }

}

function deleteCity()
{
    global $config;
    $con = db_connect($config);
    if(isset($_POST['id']))
    {
        $_POST['list'][] = $_POST['id'];
    }

    if (is_array($_POST['list'])) {

        $count = 0;
        $sql = "DELETE FROM `".$config['db']['pre']."cities` ";
        foreach ($_POST['list'] as $value)
        {
            if($count == 0)
            {
                $sql.= "WHERE `id` = '" . $value . "'";
            }
            else
            {
                $sql.= " OR `id` = '" . $value . "'";
            }

            $count++;
        }
        $sql.= " LIMIT " . count($_POST['list']);

        if(check_allow()){
            mysqli_query($con,$sql);
        }
        echo 1;
        die();
    } else {
        echo 0;
        die();
    }

}

function deleteState()
{
    global $config;
    $con = db_connect($config);
    if(isset($_POST['id']))
    {
        $_POST['list'][] = $_POST['id'];
    }

    if (is_array($_POST['list'])) {

        $count = 0;
        $sql1 = "DELETE FROM `".$config['db']['pre']."subadmin1` ";
        $sql2 = "DELETE FROM `".$config['db']['pre']."subadmin2` ";
        $sql3 = "DELETE FROM `".$config['db']['pre']."cities` ";
        foreach ($_POST['list'] as $value)
        {
            $pieces = explode(".", $value);
            $country = $pieces[0];
            $subadmin1 = $pieces[1];
            if($count == 0)
            {
                $sql1.= "WHERE `code` = '" . $value . "'";
                $sql2.= "WHERE code LIKE '" . $value . "%'" ;
                $sql3.= "WHERE country_code = '".$country."' and subadmin1_code = '".$subadmin1."'";
            }
            else
            {
                $sql1.= " OR `code` = '" . $value . "'";
                $sql2.= " OR `code` LIKE '" . $value . "%'";
                $sql3.= " OR country_code = '".$country."' and subadmin1_code = '".$subadmin1."'";
            }

            $count++;
        }
        $sql1.= " LIMIT " . count($_POST['list']);

        if(check_allow()){
            mysqli_query($con,$sql1);
            mysqli_query($con,$sql2);
            mysqli_query($con,$sql3);
        }
        echo 1;
        die();
    } else {
        echo 0;
        die();
    }

}

function deleteDistrict()
{
    global $config;
    $con = db_connect($config);
    if(isset($_POST['id']))
    {
        $_POST['list'][] = $_POST['id'];
    }

    if (is_array($_POST['list'])) {

        $count = 0;
        $sql1 = "DELETE FROM `".$config['db']['pre']."subadmin2` ";
        $sql2 = "DELETE FROM `".$config['db']['pre']."cities` ";
        foreach ($_POST['list'] as $value)
        {
            $pieces = explode(".", $value);
            $country = $pieces[0];
            $subadmin1 = $pieces[1];
            $subadmin2 = $pieces[2];
            if($count == 0)
            {
                $sql1.= "WHERE `code` = '" . $value . "'";
                $sql2.= "WHERE country_code = '".$country."' and subadmin1_code = '".$subadmin1."' and subadmin2_code = '".$subadmin2."'";
            }
            else
            {
                $sql1.= " OR `code` = '" . $value . "'";
                $sql2.= " OR country_code = '".$country."' and subadmin1_code = '".$subadmin1."' and subadmin2_code = '".$subadmin2."'";
            }

            $count++;
        }
        $sql1.= " LIMIT " . count($_POST['list']);

        if(check_allow()){
            mysqli_query($con,$sql1);
            mysqli_query($con,$sql2);
        }
        echo 1;
        die();
    } else {
        echo 0;
        die();
    }

}

function deleteCountry()
{
    global $config;
    $con = db_connect($config);
    if(isset($_POST['id']))
    {
        $_POST['list'][] = $_POST['id'];
    }

    if (is_array($_POST['list'])) {

        $count = 0;
        $sql = "DELETE FROM `".$config['db']['pre']."countries` ";
        $sql2 = "DELETE FROM `".$config['db']['pre']."cities` ";
        $sql3 = "DELETE FROM `".$config['db']['pre']."subadmin1` ";
        $sql4 = "DELETE FROM `".$config['db']['pre']."subadmin2` ";
        foreach ($_POST['list'] as $value)
        {
            if($count == 0)
            {
                $sql.= "WHERE `code` = '" . $value . "'";
                $sql2.= "WHERE `country_code` = '" . $value . "'";
                $sql3.= "WHERE code like '%".$value."%'";
                $sql4.= "WHERE code like '%".$value."%'";
            }
            else
            {
                $sql.= " OR `code` = '" . $value . "'";
                $sql2.= " OR `country_code` = '" . $value . "'";
                $sql3.= " OR code like '%".$value."%'";
                $sql4.= " OR code like '%".$value."%'";
            }

            $count++;
        }
        $sql.= " LIMIT " . count($_POST['list']);

        if(check_allow()){
            mysqli_query($con,$sql);
            mysqli_query($con,$sql2);
            mysqli_query($con,$sql3);
            mysqli_query($con,$sql4);
        }
        echo 1;
        die();
    } else {
        echo 0;
        die();
    }

}

function installPayment()
{
    global $con,$config;
    $id = $_POST['id'];
    $folder = $_POST['folder'];
    if (trim($id) != '') {
        if(check_allow()) {
            if(is_dir(ROOTPATH.'/includes/payments/'.$folder)){
                $con->query("UPDATE `" . $config['db']['pre'] . "payments` set payment_install='1' WHERE `payment_id` = '" . $id . "'");
                echo 1;
                die();
            }
        }

    }
    echo 0;
    die();
}

function uninstallPayment()
{
    global $con,$config;

    $id = $_POST['id'];
    if (trim($id) != '') {
        if(check_allow())
            $con->query("UPDATE `".$config['db']['pre']."payments` set payment_install='0' WHERE `payment_id` = '" . $id . "'");
        echo 1;
        die();
    } else {
        echo 0;
        die();
    }

}

function delete_ad_by_id($con,$config,$product_id){
    if(check_allow()){
        $qry1 = "DELETE FROM `".$config['db']['pre']."product` WHERE id = '$product_id' LIMIT 1";
        $qry2 = "SELECT screen_shot FROM `".$config['db']['pre']."product` WHERE id = '$product_id' LIMIT 1";

        if ($res = $con->query($qry2)) {
            while ($fetch = mysqli_fetch_assoc($res)) {

                $uploaddir =  "../storage/products/";
                $screen_sm = explode(',',$fetch['screen_shot']);
                foreach ($screen_sm as $value)
                {
                    $value = trim($value);
                    //Delete Image From ../storage ----
                    $filename1 = $uploaddir.$value;
                    if(file_exists($filename1)){
                        $filename1 = $uploaddir.$value;
                        $filename2 = $uploaddir."small_".$value;
                        unlink($filename1);
                        unlink($filename2);
                    }
                }
            }
        }
        mysqli_query($con,$qry1);
        return true;
    }
    else{
        return false;
    }
}

function delete_resubmitad_by_id($con,$config,$product_id){
    if(check_allow()){
        $reqry1 = "DELETE FROM `".$config['db']['pre']."product_resubmit` WHERE product_id = '$product_id' LIMIT 1";
        $reqry2 = "SELECT screen_shot FROM `".$config['db']['pre']."product_resubmit` WHERE product_id = '$product_id' LIMIT 1";

        if ($res = $con->query($reqry2)) {
            while ($fetch = mysqli_fetch_assoc($res)) {

                $uploaddir =  "../storage/products/";
                $screen_sm = explode(',',$fetch['screen_shot']);
                foreach ($screen_sm as $value)
                {
                    $value = trim($value);
                    //Delete Image From ../storage ----
                    $filename1 = $uploaddir.$value;
                    if(file_exists($filename1)){
                        $filename1 = $uploaddir.$value;
                        $filename2 = $uploaddir."small_".$value;
                        unlink($filename1);
                        unlink($filename2);
                    }
                }
            }
        }

        mysqli_query($con,$reqry1);
        return true;
    }
    else{
        return false;
    }
}

function deleteStaticPage()
{
    global $con,$config;

    if(isset($_POST['id']))
    {
        $_POST['list'][] = $_POST['id'];
    }

    if (is_array($_POST['list'])) {

        $count = 0;
        $sql = "DELETE FROM `".$config['db']['pre']."pages` ";

        foreach ($_POST['list'] as $value)
        {
            if($count == 0)
            {
                $sql.= "WHERE `parent_id` = '" . $value . "'";
            }
            else
            {
                $sql.= " OR `parent_id` = '" . $value . "'";
            }

            $count++;
        }

        if(check_allow())
            mysqli_query($con,$sql);

        echo 1;
        die();
    } else {
        echo 0;
        die();
    }

}

function deletefaq()
{
    global $con,$config;

    if(isset($_POST['id']))
    {
        $_POST['list'][] = $_POST['id'];
    }

    if (is_array($_POST['list'])) {

        $count = 0;
        $sql = "DELETE FROM `".$config['db']['pre']."faq_entries` ";

        foreach ($_POST['list'] as $value)
        {
            if($count == 0)
            {
                $sql.= "WHERE `faq_id` = '" . $value . "' or `parent_id` = '" . $value . "'";
            }
            else
            {
                $sql.= " OR `faq_id` = '" . $value . "' or `parent_id` = '" . $value . "'";
            }

            $count++;
        }


        if(check_allow())
            mysqli_query($con,$sql);

        echo 1;
        die();
    } else {
        echo 0;
        die();
    }

}

function delcoustomfield()
{
    global $con,$config;

    if(isset($_POST['id']))
    {
        $_POST['list'][] = $_POST['id'];
    }

    if (is_array($_POST['list'])) {

        $count = 0;
        $sql = "DELETE FROM `".$config['db']['pre']."custom_fields` ";

        foreach ($_POST['list'] as $value)
        {
            if($count == 0)
            {
                $sql.= "WHERE `custom_id` = '" . $value . "'";
            }
            else
            {
                $sql.= " OR `custom_id` = '" . $value . "'";
            }

            $count++;
        }
        $sql.= " LIMIT " . count($_POST['list']);
        if(check_allow()) {
            mysqli_query($con, $sql);
        }

        echo 1;
        die();
    } else {
        echo 0;
        die();
    }

}

function approveResubmitItem()
{
    global $con,$config,$lang,$link;

    $id = $_POST['id'];
    if (trim($id) != '') {
        if(check_allow()) {
            $sql = "SELECT * FROM `" . $config['db']['pre'] . "product_resubmit` WHERE `product_id` = '" . $_POST['id'] . "' LIMIT 1";
            $result = $con->query($sql);
            $info = mysqli_fetch_assoc($result);
            $row = mysqli_num_rows($result);
            if($row > 0){
                // Get usergroup details
                $group_id = get_user_group();
                $timenow = date('Y-m-d H:i:s');
                if($group_id > 0) {
                    // Get membership details
                    $group_get_info = get_usergroup_settings($group_id,$con);

                    $ad_duration = $group_get_info['ad_duration'];
                    $expire_time = date('Y-m-d H:i:s', strtotime($timenow . ' +'.$ad_duration.' day'));
                    $expire_timestamp = strtotime($expire_time);
                }else{
                    $ad_duration = 7;
                    $expire_time = date('Y-m-d H:i:s', strtotime($timenow . ' +'.$ad_duration.' day'));
                    $expire_timestamp = strtotime($expire_time);
                }
                $status = "";
                if($info['status'] = "expire"){
                    $status = "active";
                }else{
                    $status = $info['status'];
                }

                $desc = $info['description'];

                if($config['post_desc_editor'] == 1)
                    $description = addslashes($desc);
                else
                    $description = validate_input($desc);

                $sql3 = "UPDATE " . $config['db']['pre'] . "product set
                user_id         = '" . $info['user_id'] . "',
                status         = '" . $status . "',
                company_id    = '" . $info['company_id'] . "',
                product_name    = '" . $info['product_name'] . "',
                category        = '" . $info['category'] . "',
                sub_category    = '" . $info['sub_category'] . "',
                description     = '" . $description . "',
                salary_min           = '" . $info['salary_min'] . "',
                salary_max           = '" . $info['salary_max'] . "',
                salary_type           = '" . $info['salary_type'] . "',
                product_type           = '" . $info['product_type'] . "',
                negotiable      = '" . $info['negotiable'] . "',
                phone           = '" . $info['phone'] . "',
                hide_phone      = '" . $info['hide_phone'] . "',
                location        = '" . $info['location'] . "',
                city            = '" . $info['city'] . "',
                state           = '" . $info['state'] . "',
                country         = '" . $info['country'] . "',
                latlong         = '" . $info['latlong'] . "',
                screen_shot         = '" . $info['screen_shot'] . "',
                tag             = '" . $info['tag'] . "',
                custom_fields   = '" . $info['custom_fields'] . "',
                custom_types    = '" . $info['custom_types'] . "',
                custom_values   = '" . $info['custom_values'] . "',
                created_at      = '" . $timenow . "',
                expire_date      = '" . $expire_timestamp . "',
                contact_phone = '" . $info['contact_phone'] . "',
                contact_email = '" . $info['contact_email'] . "',
                contact_chat = '" . $info['contact_chat'] . "'
                WHERE id = '" . $info['product_id'] . "'
                ";

                mysqli_query ($con, $sql3) OR error(mysqli_error($con));

                $con->query("DELETE FROM `" . $config['db']['pre'] . "product_resubmit` WHERE `product_id` = '" . $_POST['id'] . "' LIMIT 1");

                //Resubmission approve Email to seller
                $product_id = $_POST['id'];
                $item_title = $info['product_name'];
                $item_author_id = $info['user_id'];

                /*SEND RESUBMISSION AD APPROVE EMAIL*/
                email_template("re_ad_approve",$item_author_id,null,$product_id,$item_title);

            }else{
                echo 0;
                die();
            }
        }
        echo 1;
        die();

    }
    else {
        echo 0;
        die();
    }

}

function approveitem()
{
    global $con,$config,$lang,$link;
    $id = $_POST['id'];
    if (trim($id) != '') {
        if(check_allow()){
            $con->query("UPDATE `".$config['db']['pre']."product` set status='active' WHERE `id` = '".$id."'");

            $query = "SELECT product_name,user_id from `".$config['db']['pre']."product` WHERE `id` = '".$id."' LIMIT 1";
            $result = mysqli_query($con, $query);
            if (mysqli_num_rows($result) > 0) {
                $info = mysqli_fetch_assoc($result);

                //Ad approve Email to seller
                $product_id = $_POST['id'];
                $item_title = $info['product_name'];
                $item_author_id = $info['user_id'];

                /*SEND RESUBMISSION AD APPROVE EMAIL*/
                email_template("ad_approve",$item_author_id,null,$product_id,$item_title);
            }
        }

        echo 1;
        die();
    } else {
        echo 0;
        die();
    }



}

function activeuser()
{
    global $con,$config;

    $id = $_POST['id'];
    if (trim($id) != '') {
        if(check_allow())
            $con->query("UPDATE `".$config['db']['pre']."user` set status='0' WHERE `id` = '" . $id . "'");
        echo 1;
        die();
    } else {
        echo 0;
        die();
    }

}

function banuser()
{
    global $con,$config;

    $id = $_POST['id'];
    if (trim($id) != '') {
        if(check_allow())
            $con->query("UPDATE `".$config['db']['pre']."user` set status='2' WHERE `id` = '" . $id . "'");
        echo 1;
        die();
    } else {
        echo 0;
        die();
    }

}

function deleteusers()
{
    global $con,$config;

    if(isset($_POST['id']))
    {
        $_POST['list'][] = $_POST['id'];
    }

    if (is_array($_POST['list'])) {

        $count = 0;
        $sql = "DELETE FROM `".$config['db']['pre']."user` ";

        foreach ($_POST['list'] as $value)
        {
            if($count == 0)
            {
                $sql.= "WHERE `id` = '" . $value . "'";
            }
            else
            {
                $sql.= " OR `id` = '" . $value . "'";
            }

            $count++;
        }
        $sql.= " LIMIT " . count($_POST['list']);

        if(check_allow())
            mysqli_query($con,$sql);

        echo 1;
        die();
    } else {
        echo 0;
        die();
    }

}

function deleteCurrency()
{
    global $con,$config;

    if(isset($_POST['id']))
    {
        $_POST['list'][] = $_POST['id'];
    }

    if (is_array($_POST['list'])) {

        $count = 0;
        $sql = "DELETE FROM `".$config['db']['pre']."currencies` ";

        foreach ($_POST['list'] as $value)
        {
            if($count == 0)
            {
                $sql.= "WHERE `id` = '" . $value . "'";
            }
            else
            {
                $sql.= " OR `id` = '" . $value . "'";
            }

            $count++;
        }
        $sql.= " LIMIT " . count($_POST['list']);

        if(check_allow())
            mysqli_query($con,$sql);

        echo 1;
        die();
    } else {
        echo 0;
        die();
    }

}

function deleteTimezone()
{
    global $con,$config;

    if(isset($_POST['id']))
    {
        $_POST['list'][] = $_POST['id'];
    }

    if (is_array($_POST['list'])) {

        $count = 0;
        $sql = "DELETE FROM `".$config['db']['pre']."time_zones` ";

        foreach ($_POST['list'] as $value)
        {
            if($count == 0)
            {
                $sql.= "WHERE `id` = '" . $value . "'";
            }
            else
            {
                $sql.= " OR `id` = '" . $value . "'";
            }

            $count++;
        }
        $sql.= " LIMIT " . count($_POST['list']);

        if(check_allow())
            mysqli_query($con,$sql);

        echo 1;
        die();
    } else {
        echo 0;
        die();
    }

}


function deleteNoresult()
{
    global $con,$config;

    if(isset($_POST['id']))
    {
        $_POST['list'][] = $_POST['id'];
    }

    if (is_array($_POST['list'])) {

        $count = 0;
        $sql = "DELETE FROM `".$config['db']['pre']."search_noresult` ";

        foreach ($_POST['list'] as $value)
        {
            if($count == 0)
            {
                $sql.= "WHERE `id` = '" . $value . "'";
            }
            else
            {
                $sql.= " OR `id` = '" . $value . "'";
            }

            $count++;
        }
        $sql.= " LIMIT " . count($_POST['list']);

        if(check_allow())
            mysqli_query($con,$sql);

        echo 1;
        die();
    } else {
        echo 0;
        die();
    }

}

function deleteMembershipPlan()
{
    global $con,$config;

    if(isset($_POST['id']))
    {
        $_POST['list'][] = $_POST['id'];
    }

    if (is_array($_POST['list'])) {

        $count = 0;
        $sql = "DELETE FROM `".$config['db']['pre']."subscriptions` ";

        foreach ($_POST['list'] as $value)
        {
            if($count == 0)
            {
                $sql.= "WHERE `sub_id` = '" . $value . "'";
            }
            else
            {
                $sql.= " OR `sub_id` = '" . $value . "'";
            }

            $count++;
        }
        $sql.= " LIMIT " . count($_POST['list']);

        if(check_allow())
            mysqli_query($con,$sql);

        echo 1;
        die();
    } else {
        echo 0;
        die();
    }

}

function deletePackage()
{
    global $con,$config;

    if(isset($_POST['id']))
    {
        $_POST['list'][] = $_POST['id'];
    }

    if (is_array($_POST['list'])) {

        $count = 0;
        $sql = "DELETE FROM `".$config['db']['pre']."usergroups` ";

        foreach ($_POST['list'] as $value)
        {
            if($count == 0)
            {
                $sql.= "WHERE `group_id` = '" . $value . "' and group_removable = '1' ";
            }
            else
            {
                $sql.= " OR `group_id` = '" . $value . "'  and group_removable = '1' ";
            }

            $count++;
        }
        $sql.= " LIMIT " . count($_POST['list']);

        if(check_allow())
            mysqli_query($con,$sql);

        echo 1;
        die();
    } else {
        echo 0;
        die();
    }

}

function deleteLanguage()
{
    global $con,$config;

    if(isset($_POST['id']))
    {
        $id = $_POST['id'];

        $sql = "DELETE FROM `".$config['db']['pre']."languages` WHERE `id` = '" . $id . "' LIMIT 1";

        if(check_allow()){
            $query = mysqli_query($con,"Select file_name from `".$config['db']['pre']."languages` where id = '" . $id . "'");
            $fetch = mysqli_fetch_assoc($query);
            $file_name = $fetch['file_name'];
            $file = '../includes/lang/lang_'.$file_name.'.php';
            if(file_exists($file))
                unlink($file);
            mysqli_query($con,$sql);

            echo 1;
            die();
        }
    } else {
        echo 0;
        die();
    }

}

function deleteadmin()
{
    global $con,$config;

    if(isset($_POST['id']))
    {
        $_POST['list'][] = $_POST['id'];
    }

    if (is_array($_POST['list'])) {

        $count = 0;
        $sql = "DELETE FROM `".$config['db']['pre']."admins` ";

        foreach ($_POST['list'] as $value)
        {
            if($count == 0)
            {
                $sql.= "WHERE `id` = '" . $value . "'";
            }
            else
            {
                $sql.= " OR `id` = '" . $value . "'";
            }

            $count++;
        }
        $sql.= " LIMIT " . count($_POST['list']);

        if(check_allow())
            mysqli_query($con,$sql);

        echo 1;
        die();
    } else {
        echo 0;
        die();
    }

}

function deleteMessage()
{
    global $con,$config;

    if(isset($_POST['id']))
    {
        $_POST['list'][] = $_POST['id'];
    }

    if (is_array($_POST['list'])) {

        $count = 0;
        $sql = "DELETE FROM `".$config['db']['pre']."messages` ";

        foreach ($_POST['list'] as $value)
        {
            if($count == 0)
            {
                $sql.= "WHERE `message_id` = '" . $value . "'";
            }
            else
            {
                $sql.= " OR `message_id` = '" . $value . "'";
            }

            $count++;
        }
        $sql.= " LIMIT " . count($_POST['list']);

        if(check_allow())
            mysqli_query($con,$sql);

        echo 1;
        die();
    } else {
        echo 0;
        die();
    }

}

function deleteProject()
{
    global $con,$config;

    if(isset($_POST['id']))
    {
        $_POST['list'][] = $_POST['id'];
    }

    if (is_array($_POST['list'])) {

        $count = 0;
        $sql = "DELETE FROM `".$config['db']['pre']."project` ";
        foreach ($_POST['list'] as $value)
        {
            if($count == 0)
            {
                $sql.= "WHERE `id` = '" . $value . "'";
            }
            else
            {
                $sql.= " OR `id` = '" . $value . "'";
            }

            $count++;
        }
        $sql.= " LIMIT " . count($_POST['list']);

        if(check_allow()){
            mysqli_query($con,$sql);
        }

        echo 1;
        die();
    } else {
        echo 0;
        die();
    }

}

function deleteads()
{
    global $con,$config;

    if(isset($_POST['id']))
    {
        $_POST['list'][] = $_POST['id'];
    }

    if (is_array($_POST['list'])) {

        $count = 0;
        $sql = "DELETE FROM `".$config['db']['pre']."product` ";
        $sql2 = "SELECT screen_shot FROM `".$config['db']['pre']."product` ";
        foreach ($_POST['list'] as $value)
        {
            if($count == 0)
            {
                $sql.= "WHERE `id` = '" . $value . "'";
                $sql2.= "WHERE `id` = '" . $value . "'";
            }
            else
            {
                $sql.= " OR `id` = '" . $value . "'";
                $sql2.= " OR `id` = '" . $value . "'";
            }

            $count++;
        }
        $sql.= " LIMIT " . count($_POST['list']);
        $sql2.= " LIMIT " . count($_POST['list']);

        if(check_allow()){
            if ($result = $con->query($sql2)) {
                while ($row = mysqli_fetch_assoc($result)) {

                    $uploaddir =  "../storage/products/";
                    $screen_sm = explode(',',$row['screen_shot']);
                    foreach ($screen_sm as $value)
                    {
                        $value = trim($value);
                        //Delete Image From ../storage ----
                        $filename1 = $uploaddir.$value;
                        if(file_exists($filename1)){
                            $filename1 = $uploaddir.$value;
                            $filename2 = $uploaddir."small_".$value;
                            unlink($filename1);
                            unlink($filename2);
                        }
                    }
                }
            }

            mysqli_query($con,$sql);
        }

        echo 1;
        die();
    } else {
        echo 0;
        die();
    }

}

function deleteCompany(){
    global $con,$config;
    if(isset($_POST['id']))
    {
        $_POST['list'][] = $_POST['id'];
    }

    if (is_array($_POST['list']))
    {
        $count = 0;
        $sql = "DELETE FROM `".$config['db']['pre']."companies` ";
        $sql2 = "SELECT logo FROM `".$config['db']['pre']."companies` ";
        $delete_product = "DELETE FROM `".$config['db']['pre']."product`";
        $delete_reproduct = "DELETE FROM `".$config['db']['pre']."product_resubmit`";
        foreach ($_POST['list'] as $value)
        {
            if($count == 0)
            {
                $sql.= "WHERE `id` = '" . $value . "'";
                $sql2.= "WHERE `id` = '" . $value . "'";
                $delete_product.= "WHERE `id` = '" . $value . "'";
                $delete_reproduct.= "WHERE `id` = '" . $value . "'";
            }
            else
            {
                $sql.= " OR `id` = '" . $value . "'";
                $sql2.= " OR `id` = '" . $value . "'";
                $delete_product.= "OR `id` = '" . $value . "'";
                $delete_reproduct.= "OR `id` = '" . $value . "'";
            }

            $count++;
        }
        $sql.= " LIMIT " . count($_POST['list']);
        $sql2.= " LIMIT " . count($_POST['list']);
        $delete_product.= " LIMIT " . count($_POST['list']);
        $delete_reproduct.= " LIMIT " . count($_POST['list']);

        if(check_allow()){
            if ($result = $con->query($sql2)) {
                while ($row = mysqli_fetch_assoc($result)) {

                    $uploaddir =  "../storage/products/";
                    // delete logo
                    $file = $uploaddir.$row['filename'];
                    if(file_exists($file))
                        unlink($file);
                }
            }

            mysqli_query($con,$delete_product);
            mysqli_query($con,$delete_reproduct);
            mysqli_query($con,$sql);
        }

        echo 1;
        die();
    }else {
        echo 0;
        die();
    }
}

function deleteResume(){
    global $con,$config;
    if(isset($_POST['id']))
    {
        $_POST['list'][] = $_POST['id'];
    }

    if (is_array($_POST['list']))
    {
        $count = 0;
        $sql = "DELETE FROM `".$config['db']['pre']."resumes` ";
        $sql2 = "SELECT filename FROM `".$config['db']['pre']."resumes` ";
        foreach ($_POST['list'] as $value)
        {
            if($count == 0)
            {
                $sql.= "WHERE `id` = '" . $value . "'";
                $sql2.= "WHERE `id` = '" . $value . "'";
            }
            else
            {
                $sql.= " OR `id` = '" . $value . "'";
                $sql2.= " OR `id` = '" . $value . "'";
            }
            $count++;
        }
        $sql.= " LIMIT " . count($_POST['list']);

        if(check_allow()){
            if ($result = $con->query($sql2)) {
                while ($row = mysqli_fetch_assoc($result)) {

                    $uploaddir =  "../storage/resumes/";
                    // delete logo
                    $file = $uploaddir.$row['filename'];
                    if(file_exists($file))
                        unlink($file);
                }
            }
            mysqli_query($con,$sql);
        }

        echo 1;
        die();
    }else {
        echo 0;
        die();
    }
}

function deleteResubmitItem()
{
    global $con,$config;

    if(isset($_POST['id']))
    {
        $_POST['list'][] = $_POST['id'];
    }

    if (is_array($_POST['list'])) {

        $count = 0;
        $sql = "DELETE FROM `".$config['db']['pre']."product_resubmit` ";
        $sql2 = "SELECT screen_shot FROM `".$config['db']['pre']."product_resubmit` ";
        $sql3 = "SELECT screen_shot FROM `".$config['db']['pre']."product` ";
        foreach ($_POST['list'] as $value)
        {
            if($count == 0)
            {
                $sql.= "WHERE `product_id` = '" . $value . "'";
                $sql2.= "WHERE `product_id` = '" . $value . "'";
                $sql3.= "WHERE `id` = '" . $value . "'";
            }
            else
            {
                $sql.= " OR `product_id` = '" . $value . "'";
                $sql2.= " OR `product_id` = '" . $value . "'";
                $sql3.= " OR `id` = '" . $value . "'";
            }

            $count++;
        }
        $sql.= " LIMIT " . count($_POST['list']);
        $sql2.= " LIMIT " . count($_POST['list']);
        $sql3.= " LIMIT " . count($_POST['list']);

        if(check_allow()){
            if ($result = $con->query($sql2)) {
                while ($row = mysqli_fetch_assoc($result)) {


                    $result3 = $con->query($sql3);
                    $row3 = mysqli_fetch_assoc($result3);

                    $uploaddir =  "../storage/products/";
                    $screen_sm = explode(',',$row['screen_shot']);
                    $re_screen = explode(',',$row3['screen_shot']);
                    $arr = array_diff($screen_sm,$re_screen);

                    foreach ($arr as $value)
                    {
                        $value = trim($value);
                        //Delete Image From Storage ----
                        $filename1 = $uploaddir.$value;
                        if(file_exists($filename1)){
                            $filename1 = $uploaddir.$value;
                            $filename2 = $uploaddir."small_".$value;
                            unlink($filename1);
                            unlink($filename2);
                        }
                    }
                }
            }

            mysqli_query($con,$sql);
        }

        echo 1;
        die();
    } else {
        echo 0;
        die();
    }

}

function deleteTransaction()
{
    global $con,$config;

    if(isset($_POST['id']))
    {
        $_POST['list'][] = $_POST['id'];
    }

    if (is_array($_POST['list'])) {

        $count = 0;
        $sql = "DELETE FROM `".$config['db']['pre']."transaction` ";

        foreach ($_POST['list'] as $value)
        {
            if($count == 0)
            {
                $sql.= "WHERE `id` = '" . $value . "'";
            }
            else
            {
                $sql.= " OR `id` = '" . $value . "'";
            }

            $count++;
        }
        $sql.= " LIMIT " . count($_POST['list']);

        if(check_allow())
            mysqli_query($con,$sql);

        echo 1;
        die();
    } else {
        echo 0;
        die();
    }

}

function deleteTaxes()
{
    global $con,$config;

    if(isset($_POST['id']))
    {
        $_POST['list'][] = $_POST['id'];
    }

    if (is_array($_POST['list'])) {

        if(check_allow()){
            ORM::for_table($config['db']['pre'].'taxes')->where_id_in($_POST['list'])->delete_many();
        }

        echo 1;
        die();
    } else {
        echo 0;
        die();
    }
}

function addPlanCustom()
{
    global $con,$config;

    $name = validate_input($_POST['name']);
    if (trim($name) != '' && is_string($name)) {
        if(check_allow()){
            $custom = ORM::for_table($config['db']['pre'].'plan_options')->create();
            $custom->title = $name;
            $custom->save();
            $id = $custom->id();

            $query = "UPDATE `".$config['db']['pre']."plan_options` SET `position` = '" . $id . "' WHERE `id` = '" . $id . "'";
            $con->query($query);
        }
        else{
            $id =1;
        }
        $result = array();
        $result['name'] = $name;
        $result['id'] = $id;
        echo json_encode($result);
        die();
    } else {
        echo 0;
        die();
    }
}

function editPlanCustom()
{
    global $config;

    $name = validate_input($_GET['title']);
    $status = $_GET['status'];
    $id = $_GET['id'];
    if (trim($name) != '' && is_string($name) && trim($id) != '') {
        if(check_allow()){
            $blog = ORM::for_table($config['db']['pre'].'plan_options')
                ->where('id',$id)
                ->find_one();
            $blog->set('title',$name);
            $blog->set('active', $status);
            $blog->save();

        }

        echo 1;
        die();
    } else {
        echo 0;
        die();
    }
}

function delPlanCustom()
{
    global $config;

    $ids = $_POST['ids'];
    if (is_array($ids)) {
        if(check_allow()){
            ORM::for_table($config['db']['pre'].'plan_options')->where_id_in($ids)->delete_many();
        }
        echo 1;
        die();
    } else {
        echo 0;
        die();
    }
}

function langTranslation_PlanCustom()
{
    global $con,$config;

    $id = $_POST['id'];
    $field_tpl = '<input type="hidden" id="field_id" value="'.$id.'">';
    if ($id) {
        $sql2 = "SELECT translation_lang,translation_name,title FROM `".$config['db']['pre']."plan_options` where id = '$id' LIMIT 1";
        $query2 = mysqli_query($con,$sql2);
        $info = mysqli_fetch_assoc($query2);
        $translation_lang = explode(',',$info['translation_lang']);
        $translation_name = explode(',',$info['translation_name']);
        $count = 0;
        foreach($translation_lang as $key=>$value)
        {
            if($value != '')
            {
                $translation[$translation_lang[$key]] = $translation_name[$key];

                $count++;
            }
        }

        $sql = "SELECT id,code,name FROM `".$config['db']['pre']."languages` where active = '1' and code != 'en'";
        $query = mysqli_query($con,$sql);
        $num = mysqli_num_rows($query);
        if($num > 0){
            while($fetch = mysqli_fetch_array($query)){
                $trans_name = (isset($translation[$fetch['code']]))? $translation[$fetch['code']] : '';
                $count = 0;

                $field_tpl .= '
                <div class="form-group">
                <label class="col-md-3 control-label">'.$fetch['name'].'</label>
                <div class="col-md-7">
                <input type="text" value="'.$trans_name.'" data-lang-code="'.$fetch['code'].'" class="form-control title_code" placeholder="In '.$fetch['name'].'">
                </div>
                </div>';
            }
        }else{
            $field_tpl .= '<div class="alert alert-success"><button type="button" class="close" data-dismiss="alert" aria-hidden="true">×</button>
            No language activated. Your site run with single language.</div>';
        }

        _esc($field_tpl);
        die();
    } else {
        echo 0;
        die();
    }
}

function edit_langTranslation_PlanCustom()
{
    global $con,$config;

    $id = $_POST['id'];
    $trans_lang = implode(',', $_POST['trans_lang']);
    $trans_name = implode(',', $_POST['trans_name']);

    if($_POST['id']){
        if(check_allow()){
            $trans_lang = mysqli_real_escape_string($con,$trans_lang);
            $trans_name = mysqli_real_escape_string($con,$trans_name);
            $a = "UPDATE `".$config['db']['pre']."plan_options` set translation_lang = '$trans_lang',translation_name = '$trans_name' where id = '".$id."' LIMIT 1";
            mysqli_query($con,$a);
            echo 1;
            die();
        }
    }

    echo 0;
    die();
}

/**********************
 * @param $con
 * @param $config
 * Manage Categories  add/edit//delete function
 */
function edit_langTranslation()
{
    global $con,$config;

    $id = $_POST['id'];
    $cattype = $_POST['cat_type'];
    if(check_allow()){
        foreach ($_POST['value'] as $items) {

            $code = $items['code'];
            $title = $items['title'];
            $slug = $items['slug'];

            $source = 'en';
            $target = $code;


            if($slug == "")
                $slug = create_category_slug($title);
            else
                $slug = create_category_slug($slug);

            $sql = "SELECT id FROM `".$config['db']['pre']."category_translation` where translation_id = '$id' AND lang_code = '$code'  AND category_type = '$cattype' LIMIT 1";
            $query = mysqli_query($con,$sql);
            $rowcount = mysqli_num_rows($query);
            $title = mysqli_real_escape_string($con,$title);

            if($rowcount != 0){
                $info = mysqli_fetch_array($query);
                $a = "UPDATE `".$config['db']['pre']."category_translation` set title = '$title',slug = '$slug' where id = '".$info['id']."' LIMIT 1";
                mysqli_query($con,$a);

            }else{
                $a = "INSERT into `".$config['db']['pre']."category_translation` set lang_code = '$code',title = '$title',slug = '$slug',category_type = '$cattype', translation_id = '$id' ";
                mysqli_query($con,$a);
            }
        }
        echo 1;
        die();
    }
    echo 0;
    die();
}

function langTranslation_FormFields()
{
    global $con,$config;

    $id = $_POST['id'];
    $type = $_POST['cat_type'];
    $field_tpl = '<input type="hidden" id="category_id" value="'.$id.'"><input type="hidden" id="category_type" value="'.$type.'">';
    if ($id) {
        $sql = "SELECT id,code,name FROM `".$config['db']['pre']."languages` where active = '1' and code != 'en'";
        $query = mysqli_query($con,$sql);
        $rows = mysqli_num_rows($query);
        if($rows > 0){
            while($fetch = mysqli_fetch_array($query)){
                $sql2 = "SELECT * FROM `".$config['db']['pre']."category_translation` where lang_code = '".$fetch['code']."' and 	translation_id = '$id' and category_type = '$type' LIMIT 1";
                $query2 = mysqli_query($con,$sql2);
                $info = mysqli_fetch_assoc($query2);

                if($type == "custom_option"){
                    $field_tpl .= '
                    <div class="row translate_row">
                    <div class="col-md-12 col-sm-12">
                    <div class="form-group">
                    <label class="col-md-3 control-label">' . $fetch['name'] . '</label>
                    <div class="col-md-9">
                    <input type="text" value="' . $info['title'] . '" class="form-control cat_title" placeholder="In ' . $fetch['name'] . '">
                    <input type="hidden" class="lang_code" value="' . $fetch['code'] . '">
                    </div>
                    </div>
                    </div>
                    </div>
                    ';
                }else{
                    $field_tpl .= '
                    <div class="row translate_row">
                    <div class="col-md-6 col-sm-12">
                    <div class="form-group">
                    <label class="col-md-3 control-label">' . $fetch['name'] . '</label>
                    <div class="col-md-9">
                    <input type="text" value="' . $info['title'] . '" class="form-control cat_title" placeholder="In ' . $fetch['name'] . '">
                    </div>
                    </div>
                    </div>
                    <div class="col-md-6 col-sm-12">
                    <div class="form-group">
                    <label class="col-md-3 control-label">Slug</label>
                    <div class="col-md-9">
                    <input type="text" value="' . $info['slug'] . '" class="form-control cat_slug" placeholder="Slug">
                    </div>
                    </div>
                    </div>
                    <input type="hidden" class="lang_code" value="' . $fetch['code'] . '">
                    </div>
                    ';
                }

            }
        }else{
            $field_tpl .= '<div class="alert alert-success"><button type="button" class="close" data-dismiss="alert" aria-hidden="true">×</button>
            No language activated. Your site run with single language. </div>';
        }
        _esc($field_tpl);
        die();
    } else {
        echo 0;
        die();
    }
}

function addNewCat()
{
    global $con,$config;

    $name = $_POST['name'];
    $icon = $_POST['icon'];
    $slug = $_POST['slug'];
    $picture = $_POST['picture'];
    if (trim($name) != '' && is_string($name)) {
        if($slug == "")
            $slug = create_category_slug($name);
        else
            $slug = create_category_slug($slug);

        $query = "Insert into `".$config['db']['pre']."catagory_main` set
        cat_name='".$name."',
        slug='".$slug."',
        picture='".$picture."',icon='".$icon."'";
        if(check_allow()){
            $con->query($query);
            $id = $con->insert_id;
        }
        else {
            $id = 1;
        }
        $vtpl = $name . ',' . $id . ',' . $icon. ',' . $slug;
        _esc($vtpl);
        die();
    } else {
        echo 0;
        die();
    }
}

function editCat()
{
    global $con,$config;

    $name = $_POST['name'];
    $icon = $_POST['icon'];
    $slug = $_POST['slug'];
    $picture = $_POST['picture'];
    $id = $_POST['id'];
    if (trim($name) != '' && is_string($name) && trim($id) != '') {
        if($slug == "")
            $slug = create_slug($name);
        else
            $slug = create_slug($slug);

        $query = "UPDATE `".$config['db']['pre']."catagory_main` SET `cat_name` = '".$name."',`icon` = '" . $icon . "',`picture` = '" . $picture . "',`slug` = '" . $slug . "' WHERE `cat_id` = '" . $id . "'";
        if(check_allow()){
            $con->query($query);


        }
        $vtpl = $name . ',' . $icon;
        _esc($vtpl);
        die();
    } else {
        echo 0;
        die();
    }
}

function deleteCat()
{
    global $con,$config;

    $id = $_POST['id'];
    if (trim($id) != '') {
        if(check_allow()){
            if ($con->query("DELETE FROM `".$config['db']['pre']."catagory_main` WHERE `cat_id` = '" . $id . "'")) {
                $con->query("DELETE FROM `".$config['db']['pre']."category_translation` WHERE `translation_id` = '" . $id . "' and category_type = 'main' ");
                $query = "SELECT sub_cat_id FROM `".$config['db']['pre']."catagory_sub` WHERE `main_cat_id` = '" . $id . "'";
                $query_result = mysqli_query ($con, $query) OR error(mysqli_error($con));
                while($row = $query_result->fetch_assoc()) // use fetch_assoc here
                {
                    $id = $row['sub_cat_id'];
                    $con->query("DELETE FROM `".$config['db']['pre']."catagory_sub` WHERE `sub_cat_id` = '" . $id . "'");
                    $con->query("DELETE FROM `".$config['db']['pre']."category_translation` WHERE `translation_id` = '" . $id . "' and category_type = 'sub' ");
                }

                echo 1;
                die();
            } else {
                echo 0;
                die();
            }
        }
        else{
            echo 1;
        }
    } else {
        echo 0;
        die();
    }
}

function quickad_update_maincat_position()
{
    global $con,$config;

    $position = $_POST['position'];
    if (is_array($position)) {
        $count = 0;
        foreach($position as $catid){

            $query = "UPDATE `".$config['db']['pre']."catagory_main` SET `cat_order` = '".$count."' WHERE `cat_id` = '" . $catid . "'";
            if(check_allow()){
                $con->query($query);
            }
            $count++;
        }

        echo 1;
        die();
    } else {
        echo 0;
        die();
    }
}

function quickad_update_subcat_position()
{
    global $con,$config;

    $position = $_POST['position'];
    if (is_array($position)) {
        $count = 0;
        foreach($position as $catid){

            $query = "UPDATE `".$config['db']['pre']."catagory_sub` SET `cat_order` = '".$count."' WHERE `sub_cat_id` = '" . $catid . "'";
            if(check_allow()){
                $con->query($query);
            }
            $count++;
        }
        echo 1;
        die();
    } else {
        echo 0;
        die();
    }
}

function quickad_update_post_type_position(){
    global $con,$config;

    $position = $_POST['position'];
    if (is_array($position)) {
        $count = 0;
        foreach($position as $id){
            $query = "UPDATE `".$config['db']['pre']."product_type` SET `position` = '".$count."' WHERE `id` = '" . $id . "'";
            if(check_allow()){
                $con->query($query);
            }
            $count++;
        }
        echo 1;
        die();
    } else {
        echo 0;
        die();
    }
}

function quickad_update_salary_type_position(){
    global $con,$config;

    $position = $_POST['position'];
    if (is_array($position)) {
        $count = 0;
        foreach($position as $id){
            $query = "UPDATE `".$config['db']['pre']."salary_type` SET `position` = '".$count."' WHERE `id` = '" . $id . "'";
            if(check_allow()){
                $con->query($query);
            }
            $count++;
        }
        echo 1;
        die();
    } else {
        echo 0;
        die();
    }
}

function quickad_update_blog_cat_position(){
    global $con,$config;
    $position = $_POST['position'];
    if (is_array($position)) {
        $count = 0;
        foreach($position as $id){
            $query = "UPDATE `".$config['db']['pre']."blog_categories` SET `position` = '".$count."' WHERE `id` = '" . $id . "'";
            if(check_allow()){
                $con->query($query);
            }
            $count++;
        }
        echo 1;
        die();
    } else {
        echo 0;
        die();
    }
}

function quickad_update_custom_field_position()
{
    global $con,$config;
    $position = $_POST['position'];
    if (is_array($position)) {
        $count = 0;
        foreach($position as $custom_id){

            $query = "UPDATE `".$config['db']['pre']."custom_fields` SET `custom_order` = '".$count."' WHERE `custom_id` = '" . validate_input($custom_id) . "'";
            if(check_allow()){
                $con->query($query) OR error(mysqli_error($con));
            }
            $count++;
        }
        echo 1;
        die();
    } else {
        echo 0;
        die();
    }
}

function quickad_update_custom_option_position()
{
    if(!check_allow()){
        echo 1;
        die();
    }
    global $con,$config,$lang;
    $position = $_POST['position'];
    if (is_array($position)) {
        $count = 0;
        $position = implode(',',$position);
        $custom_id = $_POST['field_id'];
        $sql = "UPDATE `".$config['db']['pre']."custom_fields` SET `custom_options` = '".$position."' WHERE `custom_id` = '" . validate_input($custom_id) . "'";
        if (!mysqli_query($con,$sql)) {
            $status = "error";
            $message = "Error : " . mysqli_error($con);
        } else{
            $status = "success";
            $message = __("Saved Successfully");
        }
        echo 1;
        die();
    } else {
        echo 0;
        die();
    }
}

function addSubCat()
{
    global $con,$config;

    $name = $_POST['name'];
    $cat_id = $_GET['mainid'];
    if (trim($name) != '' && is_string($name) && trim($cat_id) != '') {
        $slug = create_sub_category_slug($name);
        $query = "Insert into `".$config['db']['pre']."catagory_sub` set sub_cat_name='".$name."', slug='".$slug."', main_cat_id='".$cat_id."'";
        if(check_allow()){
            $con->query($query);
            $id = $con->insert_id;

            $query = "UPDATE `".$config['db']['pre']."catagory_sub` SET `cat_order` = '" . $id . "' WHERE `sub_cat_id` = '" . $id . "'";
            $con->query($query);


        }
        else{
            $id =1;
        }

        $vtpl = $name . ',' . $id;
        _esc($vtpl);
        die();
    } else {
        echo 0;
        die();
    }
}

function editSubCat()
{
    global $con,$config;

    $name = $_GET['title'];
    $slug = $_GET['slug'];
    $id = $_GET['id'];
    $photo_show = isset($_GET['photo_show'])? $_GET['photo_show']: 0;
    $price_show = isset($_GET['price_show'])? $_GET['price_show']: 0;
    $picture = $_GET['picture'];
    if (trim($name) != '' && is_string($name) && trim($id) != '') {

        if($slug == "")
            $slug = create_category_slug($name);
        else
            $slug = create_category_slug($slug);

        $query = "UPDATE `".$config['db']['pre']."catagory_sub` SET `sub_cat_name` = '".$name."',`slug` = '".$slug."', `picture` = '".$picture."', `photo_show` = '".$photo_show."', `price_show` = '".$price_show."' WHERE `sub_cat_id` = '" . $id . "'";
        if(check_allow()){
            $con->query($query);


        }

        echo 1;
        die();
    } else {
        echo 0;
        die();
    }
}

function delSubCat()
{
    global $con,$config;

    $subCatids = $_POST['subCatids'];
    if (is_array($subCatids)) {
        foreach ($subCatids as $subCatid) {
            if(check_allow()){
                $con->query("DELETE FROM `".$config['db']['pre']."catagory_sub` WHERE `sub_cat_id` = '" . $subCatid . "'");
                $con->query("DELETE FROM `".$config['db']['pre']."category_translation` WHERE `translation_id` = '" . $subCatid . "' and category_type = 'sub'");
            }
        }
        echo 1;
        die();
    } else {
        echo 0;
        die();
    }
}

function getSubCat()
{
    global $con,$config;

    $id = isset($_GET['category_id']) ? $_GET['category_id'] : 0;
    if ($id > 0) {
        $query = "SELECT * FROM `".$config['db']['pre']."catagory_sub` WHERE main_cat_id = ".$id." ORDER by cat_order ASC";
    } else {
        $query = "SELECT * FROM `".$config['db']['pre']."catagory_sub` ORDER by cat_order ASC";
    }
    $tags = '<div class="panel-group ui-sortable" id="services_list" role="tablist" aria-multiselectable="true">';

    if ($result = $con->query($query)) {
        while ($row = mysqli_fetch_assoc($result)) {
            $name = $row['sub_cat_name'];
            $slug = $row['slug'];
            $sub_id = $row['sub_cat_id'];
            $picture = $row['picture'];
            $photo_show = $row['photo_show'];
            $price_show = $row['price_show'];
            $photo_hide_selected = ($photo_show == 0)? "selected" :  "";
            $price_hide_selected = ($price_show == 0)? "selected" :  "";
            $userlangselect = (get_option("userlangsel") == '1')? "show" :  "hidden";

            $tags .= ' <div class="panel panel-default quickad-js-collapse" data-service-id="' . $sub_id . '">
            <div class="panel-heading" role="tab" id="s_' . $sub_id . '">
            <div class="row">
            <div class="col-sm-8 col-xs-10">
            <div class="quickad-flexbox">
            <div class="quickad-flex-cell quickad-vertical-middle">
            <i class="quickad-js-handle quickad-icon quickad-icon-draghandle quickad-margin-right-sm quickad-cursor-move ui-sortable-handle"
            title="Reorder"></i>
            </div>
            <div class="quickad-flex-cell quickad-vertical-middle">
            <a role="button"
            class="panel-title collapsed quickad-js-service-title"
            data-toggle="collapse" data-parent="#services_list"
            href="#service_' . $sub_id . '" aria-expanded="false"
            aria-controls="service_' . $sub_id . '">
            '.$name.' </a>
            </div>
            </div>
            </div>
            <div class="col-sm-4 col-xs-2">
            <div class="quickad-flexbox">
            <div class="quickad-flex-cell quickad-vertical-middle text-right"
            >
            <label class="css-input css-checkbox css-checkbox-default m-t-0 m-b-0">
            <input type="checkbox" id="checkbox'.$sub_id.'" name="check-all" value="'.$sub_id.'"  class="service-checker"><span></span>
            </label>
            </div>
            </div>
            </div>
            </div>
            </div>

            <div id="service_' . $sub_id . '" class="panel-collapse collapse" role="tabpanel"
            >
            <div class="panel-body">
            <form method="post" id="' . $sub_id . '">
            <div class="row">
            <div class="col-md-6 col-sm-12">
            <div class="form-group">
            <label for="title_' . $sub_id . '">Title</label>
            <input name="title" value="'.$name.'" id="title_' . $sub_id . '"
            class="form-control" type="text">

            </div>
            </div>
            <div class="col-md-6 col-sm-12">
            <div class="form-group">
            <label for="slug_' . $sub_id . '">Slug</label>
            <input name="slug" value="'.$slug.'" id="slug_' . $sub_id . '"
            class="form-control" type="text">

            </div>
            </div>
            </div>
            <div class="row">
            <div class="col-md-12 col-sm-12">
            <div class="form-group">
            <label for="picture_' . $sub_id . '">Icon Image Url</label>
            <input name="picture" value="'.$picture.'" id="picture_' . $sub_id . '" class="form-control" type="text">
            </div>
            </div>
            </div>
            <div class="panel-footer">
            <input name="id" value="' . $sub_id . '" type="hidden">
            <button type="button"
            class="'.$userlangselect.' btn btn-lg btn-warning quickad-cat-lang-edit" data-category-id="'.$sub_id.'" data-category-type="sub"> <span
            class="ladda-label"><i class="fa fa-language"></i> Edit Language</span></button>
            <button type="button"
            class="btn btn-lg btn-success ladda-button ajax-subcat-edit"
            data-style="zoom-in" data-spinner-size="40" onclick="editSubCat('.$sub_id.');"><span
            class="ladda-label">Save</span></button>
            <button class="btn btn-lg btn-default js-reset" type="reset">Reset
            </button>
            </div>
            </form>
            </div>
            </div>
            </div>';

        }

        $tags .= '</div>';

        _esc($tags);
        die();
    } else {
        echo 0;
        die();
    }
}

function getsubcatbyid()
{
    global $con,$config;

    $id = isset($_POST['catid']) ? $_POST['catid'] : 0;
    $selectid = isset($_POST['selectid']) ? $_POST['selectid'] : "";

    $query = "SELECT * FROM `" . $config['db']['pre'] . "catagory_sub` WHERE main_cat_id = " . $id;
    if ($result = $con->query($query)) {

        while ($row = mysqli_fetch_assoc($result)) {
            $name = $row['sub_cat_name'];
            $sub_id = $row['sub_cat_id'];
            if($selectid == $sub_id){
                $selected_text = "selected";
            }
            else{
                $selected_text = "";
            }
            echo '<option value="'.$sub_id.'" '.$selected_text.'>'.$name.'</option>';
        }


    }
}

function addPostType()
{
    global $con,$config;

    $name = $_POST['name'];
    if (trim($name) != '' && is_string($name)) {
        $query = "Insert into `".$config['db']['pre']."product_type` set title='".$name."'";
        if(check_allow()){
            $con->query($query);
            $id = $con->insert_id;

            $query = "UPDATE `".$config['db']['pre']."product_type` SET `position` = '" . $id . "' WHERE `id` = '" . $id . "'";
            $con->query($query);
        }
        else{
            $id =1;
        }
        $result = array();
        $result['name'] = $name;
        $result['id'] = $id;
        echo json_encode($result);
        die();
    } else {
        echo 0;
        die();
    }
}

function editPostType(){
    global $con,$config;

    $name = $_GET['title'];
    $status = $_GET['status'];
    $id = $_GET['id'];
    if (trim($name) != '' && is_string($name) && trim($id) != '') {

        $query = "UPDATE `".$config['db']['pre']."product_type` SET `title` = '".$name."', `active` = '".$status."' WHERE `id` = '" . $id . "'";
        if(check_allow()){
            $con->query($query);
        }

        echo 1;
        die();
    } else {
        echo 0;
        die();
    }
}

function delPostType(){
    global $con,$config;

    $ids = $_POST['ids'];
    if (is_array($ids)) {
        foreach ($ids as $id) {
            if(check_allow()){
                $con->query("DELETE FROM `".$config['db']['pre']."product_type` WHERE `id` = '" . $id . "'");
            }
        }
        echo 1;
        die();
    } else {
        echo 0;
        die();
    }
}

function langTranslation_PostTypes()
{
    global $con,$config;

    $id = $_POST['id'];
    $field_tpl = '<input type="hidden" id="field_id" value="'.$id.'">';
    if ($id) {
        $sql2 = "SELECT translation_lang,translation_name,title FROM `".$config['db']['pre']."product_type` where id = '$id' LIMIT 1";
        $query2 = mysqli_query($con,$sql2);
        $info = mysqli_fetch_assoc($query2);
        $translation_lang = explode(',',$info['translation_lang']);
        $translation_name = explode(',',$info['translation_name']);
        $count = 0;
        foreach($translation_lang as $key=>$value)
        {
            if($value != '')
            {
                $translation[$translation_lang[$key]] = $translation_name[$key];

                $count++;
            }
        }

        $sql = "SELECT id,code,name FROM `".$config['db']['pre']."languages` where active = '1' and code != 'en'";
        $query = mysqli_query($con,$sql);
        $num = mysqli_num_rows($query);
        if($num > 0){
            while($fetch = mysqli_fetch_array($query)){
                $trans_name = (isset($translation[$fetch['code']]))? $translation[$fetch['code']] : '';
                $count = 0;

                $field_tpl .= '
                <div class="form-group">
                <label class="col-md-3 control-label">'.$fetch['name'].'</label>
                <div class="col-md-7">
                <input type="text" value="'.$trans_name.'" data-lang-code="'.$fetch['code'].'" class="form-control title_code" placeholder="In '.$fetch['name'].'">
                </div>
                </div>';
            }
        }else{
            $field_tpl .= '<div class="alert alert-success"><button type="button" class="close" data-dismiss="alert" aria-hidden="true">×</button>
            No language activated. Your site run with single language.</div>';
        }

        _esc($field_tpl);
        die();
    } else {
        echo 0;
        die();
    }
}

function edit_langTranslation_PostTypes()
{
    global $con,$config;

    $id = $_POST['id'];
    $trans_lang = implode(',', $_POST['trans_lang']);
    $trans_name = $_POST['trans_name'];
    $i = 0;
    foreach($_POST['trans_lang'] as $code){
        $source = 'en';
        $target = $code;

        $trans = new GoogleTranslate();
        $data = $trans->translate($source, $target, $trans_name[$i]);
        $title[$i] = !empty($data)?$data:$trans_name[$i];
        $i++;
    }

    $trans_name = implode(',', $title);


    if($_POST['id']){
        if(check_allow()){
            $trans_name = mysqli_real_escape_string($con,$trans_name);
            $a = "UPDATE `".$config['db']['pre']."product_type` set translation_lang = '$trans_lang',translation_name = '$trans_name' where id = '".$id."' LIMIT 1";
            mysqli_query($con,$a);
            echo 1;
            die();
        }
    }

    echo 0;
    die();
}

function addSalaryType(){
    global $con,$config;

    $name = $_POST['name'];
    if (trim($name) != '' && is_string($name)) {
        $query = "Insert into `".$config['db']['pre']."salary_type` set title='".$name."'";
        if(check_allow()){
            $con->query($query);
            $id = $con->insert_id;

            $query = "UPDATE `".$config['db']['pre']."salary_type` SET `position` = '" . $id . "' WHERE `id` = '" . $id . "'";
            $con->query($query);
        }
        else{
            $id =1;
        }
        $result = array();
        $result['name'] = $name;
        $result['id'] = $id;
        echo json_encode($result);
        die();
    } else {
        echo 0;
        die();
    }
}

function editSalaryType(){
    global $con,$config;

    $name = $_GET['title'];
    $status = $_GET['status'];
    $id = $_GET['id'];
    if (trim($name) != '' && is_string($name) && trim($id) != '') {

        $query = "UPDATE `".$config['db']['pre']."salary_type` SET `title` = '".$name."', `active` = '".$status."' WHERE `id` = '" . $id . "'";
        if(check_allow()){
            $con->query($query);
        }

        echo 1;
        die();
    } else {
        echo 0;
        die();
    }
}

function delSalaryType(){
    global $con,$config;

    $ids = $_POST['ids'];
    if (is_array($ids)) {
        foreach ($ids as $id) {
            if(check_allow()){
                $con->query("DELETE FROM `".$config['db']['pre']."salary_type` WHERE `id` = '" . $id . "'");
            }
        }
        echo 1;
        die();
    } else {
        echo 0;
        die();
    }
}

function langTranslation_SalaryTypes()
{
    global $con,$config;

    $id = $_POST['id'];
    $field_tpl = '<input type="hidden" id="field_id" value="'.$id.'">';
    if ($id) {
        $sql2 = "SELECT translation_lang,translation_name,title FROM `".$config['db']['pre']."salary_type` where id = '$id' LIMIT 1";
        $query2 = mysqli_query($con,$sql2);
        $info = mysqli_fetch_assoc($query2);
        $translation_lang = explode(',',$info['translation_lang']);
        $translation_name = explode(',',$info['translation_name']);
        $count = 0;
        foreach($translation_lang as $key=>$value)
        {
            if($value != '')
            {
                $translation[$translation_lang[$key]] = $translation_name[$key];

                $count++;
            }
        }

        $sql = "SELECT id,code,name FROM `".$config['db']['pre']."languages` where active = '1' and code != 'en'";
        $query = mysqli_query($con,$sql);
        $num = mysqli_num_rows($query);
        if($num > 0){
            while($fetch = mysqli_fetch_array($query)){
                $trans_name = (isset($translation[$fetch['code']]))? $translation[$fetch['code']] : '';
                $count = 0;

                $field_tpl .= '
                <div class="form-group">
                <label class="col-md-3 control-label">'.$fetch['name'].'</label>
                <div class="col-md-7">
                <input type="text" value="'.$trans_name.'" data-lang-code="'.$fetch['code'].'" class="form-control title_code" placeholder="In '.$fetch['name'].'">
                </div>
                </div>';
            }
        }else{
            $field_tpl .= '<div class="alert alert-success"><button type="button" class="close" data-dismiss="alert" aria-hidden="true">×</button>
            No language activated. Your site run with single language.</div>';
        }

        _esc($field_tpl);
        die();
    } else {
        echo 0;
        die();
    }
}

function edit_langTranslation_SalaryTypes()
{
    global $con,$config;

    $id = $_POST['id'];
    $trans_lang = implode(',', $_POST['trans_lang']);

    $trans_name = $_POST['trans_name'];
    $i = 0;
    foreach($_POST['trans_lang'] as $code){
        $source = 'en';
        $target = $code;

        $trans = new GoogleTranslate();
        $data = $trans->translate($source, $target, $trans_name[$i]);
        $title[$i] = !empty($data)?$data:$trans_name[$i];
        $i++;
    }

    $trans_name = implode(',', $title);


    if($_POST['id']){
        if(check_allow()){
            $trans_name = mysqli_real_escape_string($con,$trans_name);
            $a = "UPDATE `".$config['db']['pre']."salary_type` set translation_lang = '$trans_lang',translation_name = '$trans_name' where id = '".$id."' LIMIT 1";
            mysqli_query($con,$a);
            echo 1;
            die();
        }
    }

    echo 0;
    die();
}

function CustomField_langTranslation_FormFields()
{
    global $con,$config;

    $id = $_POST['id'];
    $field_tpl = '<input type="hidden" id="field_id" value="'.$id.'">';
    if ($id) {
        $sql2 = "SELECT translation_lang,translation_name FROM `".$config['db']['pre']."custom_fields` where custom_id = '$id' LIMIT 1";
        $query2 = mysqli_query($con,$sql2);
        $info = mysqli_fetch_assoc($query2);
        $translation_lang = explode(',',$info['translation_lang']);
        $translation_name = explode(',',$info['translation_name']);

        $count = 0;
        foreach($translation_lang as $key=>$value)
        {
            if($value != '')
            {
                $translation[$translation_lang[$key]] = $translation_name[$key];

                $count++;
            }
        }

        $sql = "SELECT id,code,name FROM `".$config['db']['pre']."languages` where active = '1' and code != 'en'";
        $query = mysqli_query($con,$sql);
        $num = mysqli_num_rows($query);
        if($num > 0){
            while($fetch = mysqli_fetch_array($query)){
                $trans_name = (isset($translation[$fetch['code']]))? $translation[$fetch['code']] : '';
                $count = 0;

                $field_tpl .= '
                <div class="form-group">
                <label class="col-md-3 control-label">'.$fetch['name'].'</label>
                <div class="col-md-7">
                <input type="text" value="'.$trans_name.'" data-lang-code="'.$fetch['code'].'" class="form-control title_code" placeholder="In '.$fetch['name'].'">
                </div>
                </div>';
            }
        }else{
            $field_tpl .= '<div class="alert alert-success"><button type="button" class="close" data-dismiss="alert" aria-hidden="true">×</button>
            No language activated. Your site run with single language.</div>';
        }

        _esc($field_tpl);
        die();
    } else {
        echo 0;
        die();
    }
}

function edit_langTranslation_custom_fields()
{
    global $con,$config;

    $id = $_POST['id'];
    $trans_lang = implode(',', $_POST['trans_lang']);

    $trans_name = $_POST['trans_name'];
    $i = 0;
    foreach($_POST['trans_lang'] as $code){
        $source = 'en';
        $target = $code;

        $trans = new GoogleTranslate();
        $data = $trans->translate($source, $target, $trans_name[$i]);
        $title[$i] = !empty($data)?$data:$trans_name[$i];
        $i++;
    }

    $trans_name = implode(',', $title);


    if($_POST['id']){
        if(check_allow()){
            $sql = "SELECT custom_id FROM `".$config['db']['pre']."custom_fields` where custom_id = '$id' LIMIT 1";
            $query = mysqli_query($con,$sql);
            $rowcount = mysqli_num_rows($query);
            $trans_name = mysqli_real_escape_string($con,$trans_name);
            if($rowcount != 0){
                $info = mysqli_fetch_array($query);



                $a = "UPDATE `".$config['db']['pre']."custom_fields` set translation_lang = '$trans_lang',translation_name = '$trans_name' where custom_id = '".$id."' LIMIT 1";
                mysqli_query($con,$a);

            }
            echo 1;
            die();
        }
    }

    echo 0;
    die();
}

function delete_custom_fields(){
    global $con,$config;

    if(isset($_POST['id'])){
        if(!check_allow()){
            echo 1;
            die();
        }
        $id = $_POST['id'];
        $q = "SELECT custom_options FROM `".$config['db']['pre']."custom_fields` WHERE custom_id = '".validate_input($id)."' LIMIT 1";
        $query_result = mysqli_query ($con,$q) OR error(mysqli_error($con));
        $info = mysqli_fetch_array($query_result);
        $options = explode(',',stripslashes($info['custom_options']));
        foreach($options as $option_id)
        {
            $type = "custom_option";
            $query = "DELETE FROM `" . $config['db']['pre'] . "custom_options` WHERE option_id = '".validate_input($option_id)."' LIMIT 1";
            delete_language_translation($type,$option_id);
            $con->query($query);
        }

        $sql = "DELETE FROM `" . $config['db']['pre'] . "custom_fields` WHERE custom_id = '".validate_input($id)."' LIMIT 1";
        $con->query($sql);
        echo 1;
        die();
    }
    echo 0;
    die();
}
function delete_custom_option(){
    global $con,$config;
    if(isset($_POST['id'])){
        $id = $_POST['id'];
        $field_id = $_POST['field_id'];
    }

    if(isset($id)){
        if(!check_allow()){
            echo 1;
            die();
        }
        $type = "custom_option";


        $query = "SELECT custom_options FROM `" . $config['db']['pre'] . "custom_fields` WHERE custom_id = '".$field_id."' LIMIT 1";
        $result = $con->query($query) OR error(mysqli_error($con));
        $num_rows = mysqli_num_rows($result);
        if($num_rows > 0){
            $info = mysqli_fetch_array($result);
            $custom_options = $info['custom_options'];

            $array = explode(',', $custom_options);
            foreach ($array as $k => $v)
                if ($v == $id) unset($array[$k]);
            $custom_options = implode(',', $array);

            $query = "UPDATE `" . $config['db']['pre'] . "custom_fields` SET
            `custom_options` = '".$custom_options."' WHERE custom_id = '".$field_id."' LIMIT 1";
            $con->query($query) OR error(mysqli_error($con));

            $query = "DELETE FROM `" . $config['db']['pre'] . "custom_options` WHERE option_id = '".$id."' LIMIT 1";
            delete_language_translation($type,$id);
            $con->query($query);
        }
        echo 1;
        die();
    }
    echo 0;
    die();
}

function save_custom_fields_with_auto_translation()
{
    global $con,$config;

    if(!isset($_POST['fields'])){
        echo 0;
        die();
    }

    if(!check_allow()){
        echo 1;
        die();
    }

    $fields = json_decode($_POST['fields'], true);
    $count = 0;
    foreach($fields as $custom) {
        $id = $custom['id'];
        $type = $custom['type'];
        $title = $custom['label'];
        $required = empty($custom['required'])? 0 : $custom['required'];
        $allcat = $custom['allcat'];
        $maincat = $custom['maincat'];
        $category = $custom['services'];

        if (is_array($allcat)) {
            $allcat = implode(',', $custom['allcat']);
        }
        if (is_array($maincat)) {
            $maincat = implode(',', $custom['maincat']);
        }
        if (is_array($category)) {
            $category = implode(',', $custom['services']);
        }

        if ($type == 'text-field' or $type == 'textarea') {
            $options = "";
        } else {
            if (!isset($custom['items'])) {
                $custom['items'] = json_decode($custom['items'], true);
            }
            $custom_option = array();
            $i = 0;
            foreach ($custom['items'] as $items) {

                $opt_id = $items['id'];
                $opt_title = $items['value'];

                $query = "SELECT * FROM `" . $config['db']['pre'] . "custom_options` WHERE option_id = " . $opt_id;
                $result = $con->query($query);
                $num_rows = mysqli_num_rows($result);
                if($num_rows > 0){
                    $query = "UPDATE `" . $config['db']['pre'] . "custom_options` SET `title` = '".$opt_title."' WHERE option_id = '".$opt_id."' LIMIT 1";
                    $con->query($query);
                }else{
                    $query = "INSERT INTO `" . $config['db']['pre'] . "custom_options` SET `title` = '".$opt_title."' ";
                    $con->query($query);
                    $opt_id = $con->insert_id;
                }

                $trnas_type = "custom_option";
                $sql = "SELECT id,code,name FROM `".$config['db']['pre']."languages` where active = '1' and code != 'en'";
                $query = mysqli_query($con,$sql);
                mysqli_num_rows($query);
                while($fetch = mysqli_fetch_array($query)){

                    $source = 'en';
                    $target = $fetch['code'];

                    $trans = new GoogleTranslate();
                    $trans_title = $trans->translate($source, $target, $opt_title);
                    $trans_title = mysqli_real_escape_string($con,$trans_title);

                    $new_sql = "SELECT 1 FROM `".$config['db']['pre']."category_translation` WHERE lang_code = '".$fetch['code']."' and translation_id = '$opt_id' and category_type = '$trnas_type'";
                    $newquery = mysqli_query($con,$new_sql);
                    if($newquery){
                        if(mysqli_num_rows($newquery) > 0){
                            $sql2 = "UPDATE `".$config['db']['pre']."category_translation` set title = '$trans_title' WHERE lang_code = '".$fetch['code']."' and translation_id = '$opt_id' and category_type = '$trnas_type'";
                            $query2 = mysqli_query($con,$sql2) OR error(mysqli_error($con));
                        }else{
                            $sql2 = "Insert into `".$config['db']['pre']."category_translation` set lang_code = '".$fetch['code']."', translation_id = '$opt_id', category_type = '$trnas_type', title = '$trans_title'";
                            $query2 = mysqli_query($con,$sql2) OR error(mysqli_error($con));
                        }
                    }


                }

                $custom_option[$i] = $opt_id;
                $i++;
            }

            $options = implode(',', $custom_option);
        }

        if(check_allow()){
            $exist = get_customField_exist_id($id);
            if($exist > 0){
                $query = "UPDATE `" . $config['db']['pre'] . "custom_fields` SET `custom_anycat` = '".$allcat."',`custom_catid` = '".$maincat."',`custom_subcatid` = '".$category."',`custom_title` = '".$title."', `custom_type` = '".$type."',`custom_required` = '".$required."',`custom_options` = '".$options."' WHERE custom_id = '".$id."' LIMIT 1";
                $con->query($query) OR error(mysqli_error($con));
            }else{
                $lang_code = array();
                $lang_title = array();
                $sql = "SELECT code FROM `".$config['db']['pre']."languages` where active = '1' and code != 'en'";
                $result = $con->query($sql) OR error(mysqli_error($con));
                mysqli_num_rows($result);
                while($fetch = mysqli_fetch_array($result)){

                    $source = 'en';
                    $target = $fetch['code'];
                    $lang_code[] = $fetch['code'];
                    $trans = new GoogleTranslate();
                    $trans_title = $trans->translate($source, $target, $title);
                    $trans_title = mysqli_real_escape_string($con,$trans_title);
                    $lang_title[] = $trans_title;

                }
                $trans_lang = implode(',', $lang_code);
                $trans_name = implode(',', $lang_title);

                $query = "INSERT INTO `" . $config['db']['pre'] . "custom_fields` SET translation_lang = '$trans_lang', translation_name = '$trans_name', `custom_anycat` = '".$allcat."',`custom_catid` = '".$maincat."',`custom_subcatid` = '".$category."',`custom_title` = '".$title."', `custom_type` = '".$type."',`custom_required` = '".$required."',`custom_options` = '".$options."' ";
                $con->query($query) OR error(mysqli_error($con));

                $id = $con->insert_id;
                $query = "UPDATE `".$config['db']['pre']."custom_fields` SET `custom_order` = '".$id ."' WHERE custom_id = '".$id."' LIMIT 1";
                $con->query($query) OR error(mysqli_error($con));
            }
        }
        $count++;
    }

    echo 1;
    die();
}

function save_custom_fields()
{
    global $con,$config;

    if(!isset($_POST['fields'])){
        echo 0;
        die();
    }

    if(!check_allow()){
        echo 1;
        die();
    }

    $fields = json_decode($_POST['fields'], true);
    $count = 0;
    foreach($fields as $custom) {
        $id = $custom['id'];
        $type = $custom['type'];
        $title = $custom['label'];
        $required = empty($custom['required'])? 0 : $custom['required'];
        $allcat = $custom['allcat'];
        $maincat = $custom['maincat'];
        $category = $custom['services'];

        if (is_array($allcat)) {
            $allcat = implode(',', $custom['allcat']);
        }
        if (is_array($maincat)) {
            $maincat = implode(',', $custom['maincat']);
        }
        if (is_array($category)) {
            $category = implode(',', $custom['services']);
        }

        if ($type == 'text-field' or $type == 'textarea') {
            $options = "";
        } else {
            if (!isset($custom['items'])) {
                $custom['items'] = json_decode($custom['items'], true);
            }
            $custom_option = array();
            $i = 0;
            foreach ($custom['items'] as $items) {

                $opt_id = $items['id'];
                $opt_title = $items['value'];

                $query = "SELECT * FROM `" . $config['db']['pre'] . "custom_options` WHERE option_id = " . $opt_id;
                $result = $con->query($query) OR error(mysqli_error($con));
                $num_rows = mysqli_num_rows($result);
                if($num_rows > 0){
                    $query = "UPDATE `" . $config['db']['pre'] . "custom_options` SET `title` = '".$opt_title."' WHERE option_id = '".$opt_id."' LIMIT 1";
                    $con->query($query) OR error(mysqli_error($con));
                }else{
                    $query = "INSERT INTO `" . $config['db']['pre'] . "custom_options` SET `title` = '".$opt_title."' ";
                    $con->query($query) OR error(mysqli_error($con));
                    $opt_id = $con->insert_id;
                }

                $custom_option[$i] = $opt_id;
                $i++;
            }

            $options = implode(',', $custom_option);
        }

        if(check_allow()){
            $exist = get_customField_exist_id($id);
            if($exist > 0){
                $query = "UPDATE `" . $config['db']['pre'] . "custom_fields` SET `custom_anycat` = '".$allcat."',`custom_catid` = '".$maincat."',`custom_subcatid` = '".$category."',`custom_title` = '".$title."', `custom_type` = '".$type."',`custom_required` = '".$required."',`custom_options` = '".$options."' WHERE custom_id = '".$id."' LIMIT 1";
                $con->query($query) OR error(mysqli_error($con));
            }else{
                $lang_code = array();
                $lang_title = array();
                $sql = "SELECT code FROM `".$config['db']['pre']."languages` where active = '1' and code != 'en'";
                $result = $con->query($sql) OR error(mysqli_error($con));
                mysqli_num_rows($result);
                while($fetch = mysqli_fetch_array($result)){

                    $source = 'en';
                    $target = $fetch['code'];
                    $lang_code[] = $fetch['code'];
                    $trans_title = $title;
                    $trans_title = mysqli_real_escape_string($con,$trans_title);
                    $lang_title[] = $trans_title;

                }
                $trans_lang = implode(',', $lang_code);
                $trans_name = implode(',', $lang_title);

                $query = "INSERT INTO `" . $config['db']['pre'] . "custom_fields` SET translation_lang = '$trans_lang', translation_name = '$trans_name', `custom_anycat` = '".$allcat."',`custom_catid` = '".$maincat."',`custom_subcatid` = '".$category."',`custom_title` = '".$title."', `custom_type` = '".$type."',`custom_required` = '".$required."',`custom_options` = '".$options."' ";
                $con->query($query) OR error(mysqli_error($con));

                $id = $con->insert_id;
                $query = "UPDATE `".$config['db']['pre']."custom_fields` SET `custom_order` = '".$id ."' WHERE custom_id = '".$id."' LIMIT 1";
                $con->query($query) OR error(mysqli_error($con));
            }
        }
        $count++;
    }

    echo 1;
    die();
}

function getStateByCountryID()
{
    global $con,$config;

    $country_id = isset($_POST['id']) ? $_POST['id'] : 0;
    $selectid = isset($_POST['selectid']) ? $_POST['selectid'] : "";

    $query = "SELECT id,code,name FROM `".$config['db']['pre']."subadmin1` WHERE country_code = '".$country_id."' ORDER BY name";
    if ($result = $con->query($query)) {

        $list = '<option value="">Select State</option>';
        while ($row = mysqli_fetch_assoc($result)) {
            $name = $row['name'];
            $state_id = $row['id'];
            $state_code = $row['code'];
            if($selectid == $state_code){
                $selected_text = "selected";
            }
            else{
                $selected_text = "";
            }
            $list .= '<option value="'.$state_code.'" '.$selected_text.'>'.$name.'</option>';
        }

        _esc($list);
    }
}

function getStateByCountryIDforCityAdd()
{
    global $con,$config;

    $country_id = isset($_POST['id']) ? $_POST['id'] : 0;
    $selectid = isset($_POST['selectid']) ? $_POST['selectid'] : "";

    $query = "SELECT id,code,name FROM `".$config['db']['pre']."subadmin1` WHERE country_code = '".$country_id."' ORDER BY name";
    if ($result = $con->query($query)) {

        $list = '<option value="">Select State</option>';
        while ($row = mysqli_fetch_assoc($result)) {
            $name = $row['name'];
            $state_id = $row['id'];
            $code = $row['code'];
            if($selectid == $code){
                $selected_text = "selected";
            }
            else{
                $selected_text = "";
            }
            $list .= '<option value="'.$code.'" '.$selected_text.'>'.$name.'</option>';
        }

        _esc($list);
    }
}

function getDistrictSelectedforCityAdd()
{
    global $con,$config;

    $code = isset($_POST['id']) ? $_POST['id'] : 0;
    $selectid = isset($_POST['selectid']) ? $_POST['selectid'] : "";

    $query = "SELECT id,code,name FROM `".$config['db']['pre']."subadmin2` WHERE subadmin1_code = '".$code."' ORDER BY name";
    if ($result = $con->query($query)) {

        $list = '<option value="">Select District</option>';
        while ($row = mysqli_fetch_assoc($result)) {
            $name = $row['name'];
            $state_id = $row['id'];
            $code = $row['code'];

            if($selectid == $code){
                $selected_text = "selected";
            }
            else{
                $selected_text = "";
            }
            $list .= '<option value="'.$code.'" '.$selected_text.'>'.$name.'</option>';
        }

        _esc($list);
    }
}

function getCityByStateID()
{
    global $con,$config;

    $state_id = isset($_POST['id']) ? $_POST['id'] : 0;
    $selectid = isset($_POST['selectid']) ? $_POST['selectid'] : "";

    $country_code = substr($state_id,0,2);
    $query = "SELECT id ,name FROM `".$config['db']['pre']."cities` WHERE subadmin1_code = '".$state_id."' and country_code = '$country_code'" ;
    $result = $con->query($query);
    if ($result){
        if(mysqli_num_rows($result) > 0){

            $list = '<option value="">Select City</option>';
            while ($row = mysqli_fetch_assoc($result)) {
                $name = $row['name'];
                $id = $row['id'];
                if($selectid == $id){
                    $selected_text = "selected";
                }
                else{
                    $selected_text = "";
                }
                $list .= '<option value="'.$id.'" '.$selected_text.'>'.$name.'</option>';
            }
            _esc($list);
            die();
        }
    }else{
        $list = '<option value="">Select City</option>';
        _esc($list);
        die();
    }
}

function searchCityStateCountry()
{
    global $con,$config;

    $dataString = isset($_POST['dataString']) ? $_POST['dataString'] : "";
    $sortname = check_user_country($config);

    $query = "SELECT c.id, c.asciiname, c.subadmin1_code, s.asciiname AS statename
    FROM `".$config['db']['pre']."cities` AS c
    INNER JOIN `".$config['db']['pre']."subadmin1` AS s ON s.code = c.subadmin1_code
    WHERE c.asciiname like '%$dataString%' and c.country_code = '$sortname'
    ORDER BY
    CASE
    WHEN c.asciiname = '$dataString' THEN 1
    WHEN c.asciiname LIKE '$dataString%' THEN 2
    WHEN c.asciiname LIKE '%$dataString' THEN 4
    ELSE 3
    END
    LIMIT 20";

    $result = mysqli_query($con,$query);
    $total = mysqli_num_rows($result);
    $list = '<ul class="searchResgeo">';
    if ($total > 0) {
        while ($row = mysqli_fetch_assoc($result)) {
            $cityid = $row['id'];
            $cityname = $row['asciiname'];
            $stateid = $sortname.".".$row['subadmin1_code'];
            $countryid = $sortname;
            $statename = $row['statename'];

            $list .= '<li><a href="#" class="title selectme" data-cityid="'.$cityid.'" data-stateid="'.$stateid.'"data-countryid="'.$countryid.'" data-name="'.$cityname.', '.$statename.'">'.$cityname.', <span class="color-9">'.$statename.'</span></a></li>';
        }
        $list .= '</ul>';
        _esc($list);
    }
    else{
        echo '<ul class="searchResgeo"><li><span class="noresult">No results found</span></li>';
    }
}
/**********************
 * @param $con
 * @param $config
 * Google map location function
 */

function getlocHomemap()
{
    global $con,$config,$lang,$link;
    $appr = 'active';

    if(isset($_GET['serachStr'])){
        $serachStr = $_GET['serachStr'];
    }
    else{
        $serachStr = '';
    }
    if(isset($_GET['country'])){
        $country = $_GET['country'];
    }
    else{
        $country = '';
    }
    if(isset($_GET['state'])){
        $state = $_GET['state'];
    }
    else{
        $state = '';
    }
    if(!empty($_GET['city'])){
        $city = $_GET['city'];
    }
    else{
        if(!empty($_GET['locality'])){
            $city = $_GET['locality'];
        }else{
            $city = '';
        }
    }
    if(isset($_GET['searchBox'])){
        $searchBox = $_GET['searchBox'];
    }
    else{
        $searchBox = '';
    }

    if(isset($_GET['catid'])){
        $catid = $_GET['catid'];
    }
    else{
        $catid = '';
    }


    $where = "";



    if ($city != '') {

        if ($serachStr != '') {
            $where .= "AND p.product_name LIKE '%$serachStr%'";
        }

        if ($searchBox != '') {
            $where .= " AND p.category = '$searchBox' ";
        }

        if ($catid != '') {
            $where .= " AND p.sub_category = '$catid' ";
        }

        $query = "SELECT p.*,c.name AS cityname, s.name AS statename, a.name AS countryname
        FROM `".$config['db']['pre']."countries` AS a
        INNER JOIN `".$config['db']['pre']."states` AS s ON s.country_id = a.id
        INNER JOIN `".$config['db']['pre']."cities` AS c ON c.state_id = s.id
        INNER JOIN `".$config['db']['pre']."product` AS p ON p.city = c.id Where c.name = '$city' and p.status = 'active' $where";
    }
    else{

        if ($serachStr != '') {
            $where .= "AND product_name LIKE '%$serachStr%'";
        }

        if ($searchBox != '') {
            $where .= " AND category = '$searchBox' ";
        }

        if ($catid != '') {
            $where .= " AND sub_category = '$catid' ";
        }

        $query = "SELECT * FROM `".$config['db']['pre']."product`  WHERE `status` = '$appr' $where ";
    }

    $query_result = mysqli_query ($con, $query);

    $data = array();
    $i = 0;
    if ($query_result->num_rows > 0) {

        while ($row = mysqli_fetch_array($query_result))
            $results[] = $row;

        foreach($results as $result){
            $id = $result['id'];
            $featured = $result['featured'];
            $urgent = $result['urgent'];
            $highlight = $result['highlight'];
            $title = $result['product_name'];
            $cat = $result['category'];
            $price = $result['price'];
            $pics = $result['screen_shot'];
            $location = $result['location'];
            $latlong = $result['latlong'];
            $desc = $result['description'];
            $url = $link['AD-DETAIL']."/".$id;

            $caticonquery = "SELECT * FROM `".$config['db']['pre']."catagory_main`  WHERE `cat_id` = '$cat' LIMIT 1";
            $caticonres = mysqli_query ($con, $caticonquery);
            $fetch = mysqli_fetch_array($caticonres);
            $catIcon = $fetch['icon'];
            $catname = $fetch['cat_name'];

            $map = explode(',', $latlong);
            $lat = $map[0];
            $long = $map[1];

            $p = explode(',', $pics);
            $pic = $p[0];
            $pic = '../storage/products/'.$pic;

            $data[$i]['id'] = $id;
            $data[$i]['latitude'] = $lat;
            $data[$i]['longitude'] = $long;
            $data[$i]['featured'] = $featured;
            $data[$i]['title'] = $title;
            $data[$i]['location'] = $location;
            $data[$i]['category'] = $catname;
            $data[$i]['cat_icon'] = $catIcon;
            $data[$i]['marker_image'] = $pic;
            $data[$i]['url'] = $url;
            $data[$i]['description'] = $desc;


            $i++;
        }
        echo json_encode($data);
    } else {
        echo '0';
    }
    die();
}

function openlocatoionPopup()
{
    global $con,$config;
    $query = "SELECT * FROM `".$config['db']['pre']."product` WHERE id = '" . $_POST['id'] . "' LIMIT 1";
    $query_result = mysqli_query ($con, $query);
    $data = array();
    $i = 0;
    if ($query_result->num_rows > 0) {
        while ($result = mysqli_fetch_array($query_result)) {
            $id = $result['id'];
            $featured = $result['featured'];
            $urgent = $result['urgent'];
            $highlight = $result['highlight'];
            $title = $result['product_name'];
            $cat = $result['category'];
            $price = $result['price'];
            $pics = $result['screen_shot'];
            $location = $result['location'];
            $latlong = $result['latlong'];
            $desc = $result['description'];
            $url = $config['site_url']."ad/".$id;

            $caticonquery = "SELECT * FROM `".$config['db']['pre']."catagory_main`  WHERE `cat_id` = '$cat' LIMIT 1";
            $caticonres = mysqli_query ($con, $caticonquery);
            $fetch = mysqli_fetch_array($caticonres);
            $catIcon = $fetch['icon'];
            $catname = $fetch['cat_name'];

            $map = explode(',', $latlong);
            $lat = $map[0];
            $long = $map[1];

            $p = explode(',', $pics);
            $pic = $p[0];
            $pic = '../storage/products/'.$pic;


            echo '<div class="item gmapAdBox" data-id="' . $id . '" >
            <a href="' . $url . '" >
            <div class="card small">
            <div class="card-image waves-effect waves-block waves-light">
            <img class="activator" src="' . $pic . '">
            </div>
            <div class="card-content">
            <div class="label label-default">' . $catname . '</div>
            <span class="card-title activator grey-text text-darken-4 mapgmapAdBoxTitle">' . $title . '</span>
            <p class="mapgmapAdBoxLocation">' . $location . '</p>
            </div>
            </div>

            </a>
            </div>';

        }
    } else {
        echo false;
    }
    die();
}

function saveBlog(){
    global $con,$config;

    $title = strip_tags($_POST['title']);
    $tags = strtolower(preg_replace('/[^a-zA-Z0-9_ ,]/', '', $_POST['tags']));
    $image = null;
    $description = validate_input($_POST['description'],true);
    $error = array();

    if(empty($title)){
        $error[] = "Blog title is required.";
    }
    if(empty($description)){
        $error[] = "Blog description is required.";
    }

    if(empty($error)){
        if(!empty($_FILES['image'])){
            $file = $_FILES['image'];
            // Valid formats
            $valid_formats = array("jpeg", "jpg", "png");
            $filename = $file['name'];
            $ext = getExtension($filename);
            $ext = strtolower($ext);
            if (!empty($filename)) {
                //File extension check
                if (in_array($ext, $valid_formats)) {
                    $main_path = "../storage/blog/";
                    $filename = uniqid(time()).'.'.$ext;
                    if(move_uploaded_file($file['tmp_name'], $main_path.$filename)){
                        $image = $filename;
                        resizeImage(900,$main_path.$filename,$main_path.$filename);

                        if(!empty($_POST['id'])) {
                            // remove old image
                            $info = ORM::for_table($config['db']['pre'] . 'blog')
                                ->select('image')
                                ->find_one($_POST['id']);

                            if ($info['image'] != "default.png") {
                                if (file_exists($main_path . $info['image'])) {
                                    unlink($main_path . $info['image']);
                                }
                            }
                        }
                    }else{
                        $error[] = 'Image: Unexpected error, please try again.';
                    }
                } else {
                    $error[] = 'Only jpeg, jpg & png files allowed.';
                }
            }
        }
    }

    if (empty($error)) {
        $id = 1;
        if(check_allow()){
            $now = date("Y-m-d H:i:s");
            if(!empty($_POST['id'])){
                $blog = ORM::for_table($config['db']['pre'].'blog')
                    ->where('id',$_POST['id'])
                    ->where('author',$_SESSION['admin']['id'])
                    ->find_one();

                if($blog){
                    if(!empty($image)){
                        $blog->set('image', $image);
                    }
                    $blog->set('title',$title);
                    $blog->set('description',addslashes($description));
                    $blog->set('tags', $tags);
                    $blog->set('status', $_POST['status']);
                    $blog->set('updated_at', $now);
                    $blog->save();
                    $id = $_POST['id'];
                }

                ORM::for_table($config['db']['pre'].'blog_cat_relation')
                    ->where('blog_id',$_POST['id'])
                    ->delete_many();
            }else{
                $blog = ORM::for_table($config['db']['pre'].'blog')->create();
                $blog->title = $title;
                $blog->image = $image;
                $blog->description = addslashes($description);
                $blog->author = $_SESSION['admin']['id'];
                $blog->status = $_POST['status'];
                $blog->tags = $tags;
                $blog->created_at = $now;
                $blog->updated_at = $now;
                $blog->save();
                $id = $blog->id();
            }

            if(!empty($_POST['category']) && is_array($_POST['category'])){
                foreach($_POST['category'] as $cat){
                    $blog_cat = ORM::for_table($config['db']['pre'].'blog_cat_relation')->create();
                    $blog_cat->blog_id = $id;
                    $blog_cat->category_id = $cat;
                    $blog_cat->save();
                }
            }
        }
        $result = array();
        $result['status'] = 'success';
        $result['id'] = $id;
        $result['message'] = "Saved Successfully.";
        echo json_encode($result);

    } else {
        $result = array();
        $result['status'] = 'error';
        $result['message'] = implode('<br>',$error);
        echo json_encode($result);
    }
    die();
}

function deleteBlog(){
    global $con,$config;
    if(isset($_POST['id']))
    {
        $_POST['list'][] = $_POST['id'];
    }

    if (is_array($_POST['list']))
    {
        $count = 0;
        $sql = "DELETE FROM `".$config['db']['pre']."blog` ";
        $sql2 = "SELECT image FROM `".$config['db']['pre']."blog` ";
        foreach ($_POST['list'] as $value)
        {
            if($count == 0)
            {
                $sql.= "WHERE `id` = '" . $value . "'";
                $sql2.= "WHERE `id` = '" . $value . "'";
            }
            else
            {
                $sql.= " OR `id` = '" . $value . "'";
                $sql2.= " OR `id` = '" . $value . "'";
            }
            $count++;
        }
        $sql.= " LIMIT " . count($_POST['list']);

        if(check_allow()){
            if ($result = $con->query($sql2)) {
                while ($row = mysqli_fetch_assoc($result)) {

                    $uploaddir =  "../storage/blog/";
                    // delete logo
                    $file = $uploaddir.$row['image'];
                    if(file_exists($file))
                        unlink($file);
                }
            }
            mysqli_query($con,$sql);
        }

        echo 1;
        die();
    }else {
        echo 0;
        die();
    }
}

function approveComment(){
    global $con,$config;

    $query = "UPDATE `".$config['db']['pre']."blog_comment` SET `active` = '1' WHERE `id` = '" . $_POST['id'] . "'";
    if(check_allow()){
        $con->query($query);
    }

    echo 1;
    die();
}

function deleteComment(){
    global $con,$config;
    if(isset($_POST['id']))
    {
        $_POST['list'][] = $_POST['id'];
    }

    if (is_array($_POST['list']))
    {
        $count = 0;
        $sql = "DELETE FROM `".$config['db']['pre']."blog_comment` ";
        foreach ($_POST['list'] as $value)
        {
            if($count == 0)
            {
                $sql.= "WHERE `id` = '" . $value . "'";
            }
            else
            {
                $sql.= " OR `id` = '" . $value . "'";
            }
            $count++;
        }
        $sql.= " LIMIT " . count($_POST['list']);

        if(check_allow()){
            mysqli_query($con,$sql);
        }

        echo 1;
        die();
    }else {
        echo 0;
        die();
    }
}

function addBlogCat()
{
    global $con,$config;

    $name = $_POST['name'];
    if (trim($name) != '' && is_string($name)) {
        $slug = create_blog_cat_slug($name);
        $query = "Insert into `".$config['db']['pre']."blog_categories` set title='".$name."', slug='".$slug."'";
        if(check_allow()){
            $con->query($query);
            $id = $con->insert_id;

            $query = "UPDATE `".$config['db']['pre']."blog_categories` SET `position` = '" . $id . "' WHERE `id` = '" . $id . "'";
            $con->query($query);
        }
        else{
            $id =1;
        }
        $result = array();
        $result['name'] = $name;
        $result['id'] = $id;
        $result['slug'] = $slug;
        echo json_encode($result);
        die();
    } else {
        echo 0;
        die();
    }
}

function editBlogCat(){
    global $con,$config;

    $name = $_GET['title'];
    $slug = $_GET['slug'];
    $status = $_GET['status'];
    $id = $_GET['id'];
    if (trim($name) != '' && is_string($name) && trim($id) != '') {
        if(empty($slug))
            $slug = create_slug($name);
        else
            $slug = create_slug($slug);

        $query = "UPDATE `".$config['db']['pre']."blog_categories` SET `title` = '".$name."', `slug` = '".$slug."', `active` = '".$status."' WHERE `id` = '" . $id . "'";
        if(check_allow()){
            $con->query($query);
        }

        echo 1;
        die();
    } else {
        echo 0;
        die();
    }
}

function delBlogCat(){
    global $con,$config;

    $ids = $_POST['ids'];
    if (is_array($ids)) {
        foreach ($ids as $id) {
            if(check_allow()){
                $con->query("DELETE FROM `".$config['db']['pre']."blog_categories` WHERE `id` = '" . $id . "'");
            }
        }
        echo 1;
        die();
    } else {
        echo 0;
        die();
    }
}

function deleteTestimonial(){
    global $con,$config;
    if(isset($_POST['id']))
    {
        $_POST['list'][] = $_POST['id'];
    }

    if (is_array($_POST['list']))
    {
        $count = 0;
        $sql = "DELETE FROM `".$config['db']['pre']."testimonials` ";
        $sql2 = "SELECT image FROM `".$config['db']['pre']."testimonials` ";
        foreach ($_POST['list'] as $value)
        {
            if($count == 0)
            {
                $sql.= "WHERE `id` = '" . $value . "'";
                $sql2.= "WHERE `id` = '" . $value . "'";
            }
            else
            {
                $sql.= " OR `id` = '" . $value . "'";
                $sql2.= " OR `id` = '" . $value . "'";
            }
            $count++;
        }
        $sql.= " LIMIT " . count($_POST['list']);

        if(check_allow()){
            if ($result = $con->query($sql2)) {
                while ($row = mysqli_fetch_assoc($result)) {

                    $uploaddir =  "../storage/testimonials/";
                    // delete logo
                    $file = $uploaddir.$row['image'];
                    if(file_exists($file))
                        unlink($file);
                }
            }
            mysqli_query($con,$sql);
        }

        echo 1;
        die();
    }else {
        echo 0;
        die();
    }
}
?>