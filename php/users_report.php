    <?php
    require_once '../lib/dompdf/autoload.inc.php';
   // require '../lib/academic_report.php';
    use Dompdf\Dompdf;
    if (isset($_REQUEST['generatereport']) || isset($_REQUEST['class'])) {
        $signing = $_REQUEST['generatereport'];
        $thisclass = $_REQUEST['class'];
        //$class = classname(thisclass);
        switch ($signing) {
            case "ROS":
            students();
             break;
            default:
                break;
        }
    }
    function students() {
        /*
        include "./php/core.inc.php";
                    if (loggedin()) {
                            $name = ucfirst(getfield('fname'));
                            $user_id = getfield('parish_staffno');
                        } else {
                            header('Location:../index.php'); //If you are not logged in. You are redirected to the index page.
                        }
                        */
        include "core.inc.php";
        $data = mysqli_query($con, "SELECT * FROM biodata");
        $datafectched = mysqli_fetch_array($data);
        $fetched = "<tr style='background-color:#f5f5f5;'>
     <td >$datafectched[id]</td>
        <td>$datafectched[admission_no]</td>
        <td style = 'width:80%;'>$datafectched[sname] $datafectched[fname]</td>
        <td>$datafectched[gender]</td>
        <td>$datafectched[house]</td>
        <td style='width:30px;'>$datafectched[section]</td>
        <td style='width:30px;'>$datafectched[section]</td>

        </tr>
        ";
        while ($datafectched = mysqli_fetch_array($data)) {
            $fetched = $fetched . 
            " <tr style='background-color:#f5f5f5;'>
     <td >$datafectched[id]</td>
        <td>$datafectched[admission_no]</td>
        <td style = 'width:80%;'>$datafectched[sname] $datafectched[fname]</td>
        <td>$datafectched[gender]</td>
        <td>$datafectched[house]</td>
        <td style='width:30px'>$datafectched[section]</td>
        <td style='width:30px;'>$datafectched[section]</td>

        </tr>
        ";
        }
        $date = date('d-m-Y');
        $time = date('H:i:s');
        $data = "
    <div class='row'>
    <div class='col-lg-12'>
        <div class='panel panel-primary'>
            <div class='panel-heading'>
               <div><b>ST ANNE GRACE S.S NAKIFUMA</b><br>P.O Box 1103 Kampala Uganda<br>Tel:+256 7098976<br>Email:stannegrace@gmail.com</div>
        <hr>
        <div>Class: <b>Senior One</b></div>
            </div>
            <div class='panel-body'>
                <div class='dataTable_wrapper'>
                    <table border='0'>
                        <thead style='background-color:#337ab7;color:#FFF;'>
                            <tr>
                    <th>No.</th>
                    <th>Admission No.</th>
                    <th>Name</th>
                    <th>Gender</th>
                    <th>House</th>
                    <th style='width:30px'>Section</th>
                            </tr>
                        </thead>
                        <tbody>
                        $fetched
                        </tbody>
                    </table>
                </div>";
                GeneratePDF($data,'Terminal');
              }
    function terminalreport(){
        $thishtml = "
          <div id='report_wrapper'>
          <img src ='o-level report.jpg'/>
          <div id ='contact'>Tel: +256 772 460 356 +256 782 587 361
          +256 701 249 617<br>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
          &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
          &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Email:stannenag2001@gmail.com</div>
          <hr size ='1'>
          <div id='report_details'>
          <table id='no_border' >
        <tr id='no_border'>
        <td height='5'width='30' id='no_border'><strong>Student No.</strong></td>
           <td width='30'id='no_border'><u>21048206</u></td>
        <td height='5'width='30' id='no_border'><strong>Reg Number</strong></td>
           <td width='30' id='no_border'><u>14/SAGN/B/124</u></td>
          <td width='30' id='no_border'><strong>Name</strong></td>
          <td width='30'id='no_border'><u>KIMULI SAM</u></td>
          <td width='30' id='no_border'><strong>House</strong></td>
          <td width='30' id='no_border'><u>KIWANUKA</u></td>
          <td width='30' id='no_border'><strong>Term:</strong></td>
          <td width='30'id='no_border'><u>TWO</u></td>
        </tr>
        <tr  colspan='3'>
      
      </table>
      </div>
          <div>
          <table style='border:1px solid black;'>
        <tr>
          <td width='157' height='10' style='background-color:#337ab7;color:#FFF;'>SUBJECT</td>
          <td width='47' style='background-color:#337ab7;color:#FFF;'><p>B.O.T Exam</p>
        (100%)</td>
          <td width='47' style='background-color:#337ab7;color:#FFF;'><p>E.O.T Exam</p>
           (100%)</td>
          <td width='58' style='background-color:#337ab7;color:#FFF;'><p>Average</p>
         (100%)</td>
          <td width='38' style='background-color:#337ab7;color:#FFF;'>Grade</td>
          <td width='65' style='background-color:#337ab7;color:#FFF;'>Comments</td>
          <td width='58' style='background-color:#337ab7;color:#FFF;'>Signature</td>
        </tr>
        <tr style='border:1px solid black;>
        <td >112 English Language</td>
        <td>78</td>
        <td>&nbsp;</td>
        <td>&nbsp;</td>
        <td>&nbsp;</td>
        <td>&nbsp;</td>
        <td>&nbsp;</td>
      </tr>
      <tr style='border:1px solid black;>
        <td>223 C.R.E</td>
        <td>&nbsp;</td>
        <td>&nbsp;</td>
        <td>&nbsp;</td>
        <td>&nbsp;</td>
        <td>&nbsp;</td>
        <td>&nbsp;</td>
      </tr>
      <tr style='border:1px solid black;>
        <td>208 Literature</td>
        <td>&nbsp;</td>
        <td>&nbsp;</td>
        <td>&nbsp;</td>
        <td>&nbsp;</td>
        <td>&nbsp;</td>
        <td>&nbsp;</td>
      </tr>
      <trstyle='border:1px solid black;>
        <td>221 History</td>
        <td>&nbsp;</td>
        <td>&nbsp;</td>
        <td>&nbsp;</td>
        <td>&nbsp;</td>
        <td>&nbsp;</td>
        <td>&nbsp;</td>
      </tr>
      <tr style='border:1px solid black;>
        <td>456 Mathematics</td>
        <td>&nbsp;</td>
        <td>&nbsp;</td>
        <td>&nbsp;</td>
        <td>&nbsp;</td>
        <td>&nbsp;</td>
        <td>&nbsp;</td>
      </tr>
      <tr style='border:1px solid black;>
        <td>553 Biology</td>
        <td>&nbsp;</td>
        <td>&nbsp;</td>
        <td>&nbsp;</td>
        <td>&nbsp;</td>
        <td>&nbsp;</td>
        <td>&nbsp;</td>
      </tr>
      <tr style='border:1px solid black;>
        <td>545 Chemistry</td>
        <td>&nbsp;</td>
        <td>&nbsp;</td>
        <td>&nbsp;</td>
        <td>&nbsp;</td>
        <td>&nbsp;</td>
        <td>&nbsp;</td>
      </tr>
      <tr style='border:1px solid black;>
        <td>610 Fine Art</td>
        <td>&nbsp;</td>
        <td>&nbsp;</td>
        <td>&nbsp;</td>
        <td>&nbsp;</td>
        <td>&nbsp;</td>
        <td>&nbsp;</td>
      </tr>
      <tr style='border:1px solid black;>
        <td>800 Commerce</td>
        <td>&nbsp;</td>
        <td>&nbsp;</td>
        <td>&nbsp;</td>
        <td>&nbsp;</td>
        <td>&nbsp;</td>
        <td>&nbsp;</td>
      </tr>
      <tr style='border:1px solid black;>
        <td>225 I.R.E </td>
        <td>&nbsp;</td>
        <td>&nbsp;</td>
        <td>&nbsp;</td>
        <td>&nbsp;</td>
        <td>&nbsp;</td>
        <td>&nbsp;</td>
      </tr >
      <tr style='border:1px solid black;>
        <td>335 Luganda</td>
        <td>&nbsp;</td>
        <td>&nbsp;</td>
        <td>&nbsp;</td>
        <td>&nbsp;</td>
        <td>&nbsp;</td>
        <td>&nbsp;</td>
      </tr>
      <tr style='border:1px solid black;>
        <td>845 Entrepreneurship</td>
        <td>&nbsp;</td>
        <td>&nbsp;</td>
        <td>&nbsp;</td>
        <td>&nbsp;</td>
        <td>&nbsp;</td>
        <td>&nbsp;</td>
      </tr>
      <tr style='border:1px solid black;>
        <td>840 Computer Studies</td>
        <td>&nbsp;</td>
        <td>&nbsp;</td>
        <td>&nbsp;</td>
        <td>&nbsp;</td>
        <td>&nbsp;</td>
        <td>&nbsp;</td>
      </tr>
      <tr style='border:1px solid black;>
        <td>527 Agriculuture</td>
        <td>&nbsp;</td>
        <td>&nbsp;</td>
        <td>&nbsp;</td>
        <td>&nbsp;</td>
        <td>&nbsp;</td>
        <td>&nbsp;</td>
      </tr>
      <tr style='border:1px solid black;>
        <td>336 Kiswali </td>
        <td>45</td>
        <td>&nbsp;</td>
        <td>&nbsp;</td>
        <td>&nbsp;</td>
        <td>&nbsp;</td>
        <td>&nbsp;</td>
      </tr>
      <tr style='border:1px solid black;>
        <td>TOTAL </td>
        <td>&nbsp;</td>
        <td>&nbsp;</td>
        <td>&nbsp;</td>
        <td>&nbsp;</td>
        <td>&nbsp;</td>
        <td>&nbsp;</td>
      </tr>
      </table>
      
      </div>
      
      
      <table border='1'>
      <tr>
      <td>Marks</td>
      <td>80-100</td>
      <td>75-79</td>
      <td>70-74</td>
      <td>65-69</td>
        <td>60-64</td>
      <td>59-55</td>
      <td>54-50</td>
      <td>40-49</td>
      <td>39-00</td>
      </tr>
        <tr>
      <td>Grade</td>
      <td>D1</td>
      <td>D2</td>
      <td>C3</td>
      <td>C4</td>
        <td>C5</td>
      <td>C6</td>
      <td>P7</td>
      <td>P8</td>
      <td>F9</td>
      </tr>
      </table>
      
      
          </div>
          ";
          GeneratePDF($thishtml,'Terminal');
      }
    function Con() {
        $con = new mysqli("localhost","root","mydb","");
        if(!$con){
            echo "Server Not Found";
        }
        return $con;
    }
      /////dompdf/////////////////
      function GeneratePDF($data,$reportType) {
        $date_entry = date('YmdHms');
        $dompdf = new Dompdf();
        $dompdf->loadHtml($data);
        $dompdf->setPaper('A4', 'portrait');
        $dompdf->render();
        $dompdf->stream($date_entry." ".$reportType, array('Attachment' => 0));
    }  
    ?>
    