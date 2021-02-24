<select name="entryList" id="entryList">
<option selected="selected" value="A%5Edam">آدَم</option>
<option value="A%5Ezar">آزَر</option>
<option value="%3EabaAriyq">أَبَارِيق</option>
<option value="Abb">أ ب ب</option>
<option value="Abd">أ ب د</option>
<option value="%3CiboraAhiym">إِبْرَاهِيم</option>
<option value="Abq">أ ب ق</option>
<option value="Abl">أ ب ل</option>
<option value="%3Ciboliys">إِبْلِيس</option>
<option value="Abw">أ ب و</option>
<option value="Aby">أ ب ي</option>
<option value="Aty">أ ت ي</option>
<option value="Avv">أ ث ث</option>
<option value="Avr">أ ث ر</option>
<option value="Avl">أ ث ل</option>
<option value="Avm">أ ث م</option>
<option value="Ajj">أ ج ج</option>
<option value="Ajr">أ ج ر</option>
<option value="Ajl">أ ج ل</option>
<option value="AHd">أ ح د</option>
<option value="Ax*">أ خ ذ</option>
<option value="Axr">أ خ ر</option>
<option value="Axw">أ خ و</option>
<option value="Add">أ د د</option>
<option value="Ady">أ د ي</option>
<option value="%3Ci*">إِذ</option>
<option value="%3Ci*aA">إِذَا</option>
<option value="%3Ci*FA">إِذًا</option>
<option value="A*n">أ ذ ن</option>
<option value="A*y">أ ذ ي</option>
<option value="Arb">أ ر ب</option>
<option value="ArD">أ ر ض</option>
<option value="Ark">أ ر ك</option>
<option value="%3Ciram">إِرَم</option>
<option value="Azr">أ ز ر</option>
<option value="Azz">أ ز ز</option>
<option value="Azf">أ ز ف</option>
<option value="%3Cisotaboraq">إِسْتَبْرَق</option>
<option value="%3CisoHaAq">إِسْحَاق</option>
<option value="Asr">أ س ر</option>
<option value="%3CisoraA%7Diyl">إِسْرَائِيل</option>
<option value="Ass">أ س س</option>
<option value="Asf">أ س ف</option>
<option value="%3CisomaAEiyl">إِسْمَاعِيل</option>
<option value="Asn">أ س ن</option>
<option value="Asw">أ س و</option>
<option value="A%24r">أ ش ر</option>
<option value="ASr">أ ص ر</option>
<option value="ASl">أ ص ل</option>
<option value="Aff">أ ف ف</option>
<option value="Afq">أ ف ق</option>
<option value="Afk">أ ف ك</option>
<option value="Afl">أ ف ل</option>
<option value="Akl">أ ك ل</option>
<option value="Alt">أ ل ت</option>
<option value="Alf">أ ل ف</option>
<option value="All">أ ل ل</option>
<option value="%3Cil%7EaA">إِلَّا</option>
<option value="%7Bl%7Ea*iY">ٱلَّذِى</option>
<option value="Alm">أ ل م</option>
<option value="Alh">أ ل ه</option>
<option value="Alw">أ ل و</option>
<option value="%3CilaY%60">إِلَىٰ</option>
<option value="%3CiloyaAs">إِلْيَاس</option>
<option value="%7BloyasaEa">ٱلْيَسَعَ</option>
<option value="%3Eam">أَم</option>
<option value="Amt">أ م ت</option>
<option value="Amd">أ م د</option>
<option value="Amr">أ م ر</option>
<option value="%3Eamos">أَمْس</option>
<option value="Aml">أ م ل</option>
<option value="Amm">أ م م</option>
<option value="%3Eam%7EaA">أَمَّا</option>
<option value="%3Cim%7EaA">إِمَّا</option>
<option value="Amn">أ م ن</option>
<option value="Amw">أ م و</option>
<option value="Anv">أ ن ث</option>
<option value="Ans">أ ن س</option>
<option value="Anf">أ ن ف</option>
<option value="Anm">أ ن م</option>
<option value="Any">أ ن ي</option>
<option value="Ahl">أ ه ل</option>
<option value="Awb">أ و ب</option>
<option value="Awd">أ و د</option>
<option value="Awl">أ و ل</option>
<option value="Awh">أ و ه</option>
<option value="Awy">أ و ي</option>
<option value="Ayd">أ ي د</option>
<option value="Aym">أ ي م</option>
<option value="Ayy">أ ي ي</option>
</select>
<br /><br /><br />
<?php foreach ($row as $ind => $value) : ?>
<a href="<?php echo base_url('hijaiyah/kolom?q='.$value->no); ?>"><?php echo $value->isi; ?></a> <br />
<?php endforeach;?>


<audio controls autoplay>
  <source src="<?php echo base_url('assets/murotal/MisharyRashid/001001.ogg'); ?>" type="audio/ogg">
  <source src="<?php echo base_url('assets/murotal/MisharyRashid/001001.mp3'); ?>" type="audio/mpeg">
  Your browser does not support the audio element.
</audio>


