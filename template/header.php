<!-----HEADER WEB------>
<div class="col-sm-12 header">   
    <table> 
        <tr>
            <td>
                <img src="asset/sokin-logo2.png" alt="logo" width="100px" style="margin: 20px;">
            </td>
            <td></td>
            <td></td>
            <td>
                <h2>THE SOKINZ.</h2>
                <p>
                    <?php
                    if(!empty($_SESSION["login"])){
                        if($_SESSION["login"]=="Admin"){
                            echo "Menu Admin";
                        }
                        if($_SESSION["login"]=="Kasir"){
                            echo "Menu Kasir";
                        }
                    }
                    ?>
                </p>
            </td>
        </tr>
    </table>
</div>
<!----AKHIR HEADER----->