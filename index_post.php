$SNIEPs1 = $SNIEPs2 = $SNIEPs3 = $RPLs1 = $RPLs2 = $RENFECs1 = $RENFECs1 = $EPASs1 = $EPASs2 = $EPASs3 = $SCOM1 = $SCOM2 = "";
$Clima1 = $Clima2 = $Clima3 = "";
$Bandoteca = $Magazie = $CCentrala = "";

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $SNIEPs1 = test_input($_POST['']);
    $SNIEPs2 = test_input($_POST['']);
    $SNIEPs3 = test_input($_POST['']);

    $RPLs1 = test_input($_POST['']);
    $RPLs2 = test_input($_POST['']);
    $RPLs3 = test_input($_POST['']);

    $RENFECs1 = test_input($_POST(['']));
    $RENFECs2 = test_input($_POST(['']));

    $EPASs1 = test_input($_POST['']);
    $EPASs2 = test_input($_POST['']);
    $EPASs3 = test_input($_POST['']);

    $SCOM1 = test_input($_POST['']);
    $SCOM2 = test_input($_POST['']);

    $Clima1 = test_input($_POST['']);
    $Clima2 = test_input($_POST['']);
    $Clima3 = test_input($_POST['']);

    $Bandoteca = test_input($_POST['']);
    $Magazie = test_input($_POST['']);
    $CCentrala = test_input($_POST['']);
}

function test_input($data) {
    $data = trim($data);
    $data = stripslashes($data);
    $data = htmlspecialchars($data);
    return $data;
}