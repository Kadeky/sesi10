<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>latihan form 1</title>

</head>
<body>
    <form name="latihan1"method="POST" onsubmit="return checkform(this)">
        <div>
            NIM
            <input type="text" name="txNIM">
        </div>
        <div>
            jenis kelamin
            <input type="radio" name="txJK" valume="L">laki-laki
            <input type="radio" name="txJK" valume="p">perempuan
        </div>
        <div>
        jurusan
         <select name="txJURUSAN">
            <option value="MTI">MTI</option>
            <option value="KAB">KAB</option>
            <option value="DSN">Desain</option>
        <select>
</div>
<div>
    Hobi
    <input type="checkbox" name="txhobisepakbola" value="1">sepak bola
    <input type="checkbox" name="txhobivoliy" value="1">voliy
    <input type="checkbox" name="txhobibulutangkis" value="1">bulu tangkis
    <input type="checkbox" name="txhobitenismeja" value="1">tenismeja
    <input type="checkbox" name="txhobicatur" value="1">catur
</head>
<body>
    <button type="sumbit"> kirim data </button>
</div>

</form>

   <script type="text/javascript">
       function checkform(frm){
           let form = frm.elements;
           let NIM = form.namedItem("txNIM").value;
           let jnskel = form.namedItem("txJK").value;
           let jur = form.namedItem("txJURUSAN").value;
           let hobi=[
               form.namedItem("txhobisepakbola").checked,
               form.namedItem("txhobivoliy").checked,
               form.namedItem("txhobibulutangkis").checked,
               form.namedItem("txhobitenismeja").checked,
               form.namedItem("txhobicatur").checked
           ];
           
           console.log("NIM: "+NIM);
           console.log("Jenis Kelamin: "+jnskel);
           console.log("jurusan: "+jur);
           console.log("hobi: "+hobi);

           return false;
       }
    </script>
</body>
</html>


    

    
   






    
</body>
</html>