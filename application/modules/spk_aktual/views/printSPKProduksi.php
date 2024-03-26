<html>
<head>
  <title>Cetak PDF</title>
<style>
    table.gridtable {
		font-family: Arial, Helvetica, sans-serif;
		font-size:11px;
		color:#333333;
		border: 1px solid #dddddd;
		border-collapse: collapse;
        margin: 30px;
	}
	table.gridtable th {
		padding: 6px;
		background-color: #0049a8;
		color: white;
		border-color: #0049a8;
		border-style: solid;
		border-width: 1px;
	}
	table.gridtable th.head {
		padding: 6px; 
		background-color: #0049a8;
		color: white;
		border-color: #0049a8;
		border-style: solid;
		border-width: 1px;
	}
	table.gridtable tr:nth-child(even) {
		background-color: #f2f2f2;
	}
	table.gridtable td {
		padding: 6px;
	}
	table.gridtable td.cols {
		padding: 6px;
	}

    table.gridtable2 {
		font-family: Arial, Helvetica, sans-serif;
		font-size:12px;
		color:#333333;
		border-width: 1px;
		border-color: #666666;
		border-collapse: collapse;
	}
	table.gridtable2 th {
		border-width: 1px;
		padding: 3px;
		border-style: none;
		border-color: #666666;
		background-color: #f2f2f2;
	}
	table.gridtable2 th.head {
		border-width: 1px;
		padding: 3px;
		border-style: none;
		border-color: #666666;
		background-color: #7f7f7f;
		color: #ffffff;
	}
	table.gridtable2 td {
		border-width: 1px;
		padding: 3px;
		border-style: none;
		border-color: #666666;
		background-color: #ffffff;
	}
	table.gridtable2 td.cols {
		border-width: 1px;
		padding: 3px;
		border-style: none;
		border-color: #666666;
		background-color: #ffffff;
	}

    table.gridtable3 {
		font-family: Arial, Helvetica, sans-serif;
		font-size:12px;
		color:#333333;
		border-width: 1px;
		border-color: #666666;
		border-collapse: collapse;
        margin: 25px;
	}
	table.gridtable3 th {
		border-width: 1px;
		padding: 3px;
		border-style: none;
		border-color: #666666;
		background-color: #f2f2f2;
	}
	table.gridtable3 th.head {
		border-width: 1px;
		padding: 3px;
		border-style: none;
		border-color: #666666;
		background-color: #7f7f7f;
		color: #ffffff;
	}
	table.gridtable3 td {
		border-width: 1px;
		padding: 3px;
		border-style: none;
		border-color: #666666;
		background-color: #ffffff;
	}
	table.gridtable3 td.cols {
		border-width: 1px;
		padding: 3px;
		border-style: none;
		border-color: #666666;
		background-color: #ffffff;
	}
</style>
</head>
<?php
    $id_spkproduksi = (!empty($header))?$header[0]->id_spkproduksi:'';
    $no_surat = (!empty($header))?$header[0]->no_surat:'';
    $tgl_spk_produksi = (!empty($header))?$header[0]->tgl_spk_produksi:'';
    $id_material = (!empty($header))?$header[0]->id_material:'';
    $density = (!empty($header))?$header[0]->density:'';
    $thickness = (!empty($header))?$header[0]->thickness:'';
    $width = (!empty($header))?$header[0]->width:'';
    $weight = (!empty($header))?$header[0]->weight:'';
    $lpegangan = (!empty($header))?$header[0]->lpegangan:'';
    $lotno = (!empty($header))?$header[0]->lotno:'';
    $panjang = (!empty($header))?$header[0]->panjang:'';
    $nama_material = (!empty($header))?$header[0]->nama_material:'';

    $process = (!empty($header))?$header[0]->process:'';
    $kg_process = (!empty($header))?$header[0]->kg_process:'';
    $length = (!empty($header))?$header[0]->length:'';
    $count_m = (!empty($header))?$header[0]->count_m:'';

    $id_stock = (!empty($header))?$header[0]->id_stock:'';

    $qcoil = (!empty($header))?$header[0]->qcoil:'';
    $jpisau = (!empty($header))?$header[0]->jpisau:'';
    $used = (!empty($header))?$header[0]->used:'';
    $sisa = (!empty($header))?$header[0]->sisa:'';
    $id_spkproduksi = (!empty($header))?$header[0]->id_spkproduksi:'';
	$keterangan = (!empty($header))?$header[0]->keterangan:'';
?>
<body>
    <table border="0"  align="center"  width='100%' >
        <tr>
            <td width="700" align="left" valign="top">
                <h5 style="text-align: left;">PT. METALSINDO PACIFIC</h5>
            </td>
        </tr>
            <tr>
            <td width="700" align="center" valign="top">
                <h4 style="text-align: center;">SPK PRODUKSI</h4>
            </td>
        </tr>
    </table>
    <br>
   
	<table class='gridtable' width='100%'  align="left" border='0' cellpadding='0'>
        <tr>
            <td width='100%'>A. Material</td>
            
        </tr>
	</table>
	<table class='gridtable' width='100%'  align="left" border='1' cellpadding='2'>
        <tr>
            <td width='15%'>No Lot</td>
            <td width='15%'>Nama Material</td>
            <td width='15%'>Thickness</td>
            <td width='10%'>Density</td>
			<td width='7%'>Width<br>Mother<br> Coil</td>
            <td width='7%'>Length<br>Mother<br> Coil</td>
            <td width='7%'>Weight<br> Packing<br> list</td>
            <td width='7%'>Weight <br> Actual<br> Mother<br> Coil</td>
            <td width='7%'>Plan<br> Weight<br> Sisa</td>
            <td width='7%'>Actual<br> Weight<br> Sisa</td>
        </tr>
		 <tr>
            <td width='15%'><?=$lotno;?></td>
            <td width='15%'><?=$material($id_material);?></td>
            <td width='15%'><?=$thickness;?></td>
            <td width='10%'><?=$density;?></td>
			<td width='7%'><?=$width;?></td>
            <td width='7%'><?=$length;?></td>
            <td width='7%'><?=$weight;?></td>
            <td width='7%'></td>
            <td width='7%'><?=$sisa;?></td>
            <td width='7%'></td>
        </tr>
	</table>
	<br>
	
	
	<table class='gridtable' width='100%'  align="left" border='0' cellpadding='0'>
        <tr>
            <td width='100%'>B. SPK</td>
            
        </tr>
	</table>
	<table class='gridtable' width='100%'  align="left" border='1' cellpadding='2'>
        <tr>
            <td width='15%'>No. SPK</td>
            <td width='15%'>Tanggal</td>
            <td width='15%'>Weight <br> Mother <br> Coil</td>
            <td width='10%'>Length (m) / <br> Length Setting (m)</td>
			<td width='7%'>Process / <br> Kg Process</td>
            <td width='7%'>Jumlah <br> Pisau</td>
            <td width='7%'>Qty Coil</td>
            <td width='7%'>Lebar <br> Pegangan</td>
            <td width='7%'>Keterangan</td>
          
        </tr>
		 <?php 
        $a=0;
        foreach($spk as $val => $spk_hd){  
		
		if($spk_hd['kg_process'] != 0){		
		$kg = number_format($spk_hd['kg_process'],2);		
		}		
		else{		
		$kg = $spk_hd['kg_process'];
		}
		
		if($spk_hd['process'] != 0){		
		$proses = number_format($spk_hd['process'],2);		
		}		
		else{		
		$proses = $spk_hd['process'];
		}
		
		?>
		 <tr>
            <td width='15%'><?=$spk_hd['no_surat'];?></td>
            <td width='15%'><?=$spk_hd['tgl_spk_produksi'];?></td>
            <td width='15%'><?=$spk_hd['weight'];?></td>
            <td width='10%'><?=number_format($spk_hd['length'],2).' / '.number_format($spk_hd['count_m'],2);?></td>
			<td width='7%'><?=$proses.' / '.$kg;?></td>
            <td width='7%'><?=number_format($spk_hd['jpisau'],2);?></td>
            <td width='7%'><?=number_format($spk_hd['qcoil'],2);?></td>
            <td width='7%'><?=number_format($spk_hd['lpegangan'],2);?></td>
            <td width='7%'><?=$spk_hd['keterangan'];?></td>
           
        </tr>
		
		<?php
		}
        ?>
	</table>
	<br>
	<table class='gridtable' width='100%'  align="left" border='0' cellpadding='0'>
        <tr>
            <td width='100%'>C. Produksi</td>
            
        </tr>
	</table>
    <table class='gridtable' width='100%'  align="left" border='1' cellpadding='2'>
        <tr>
            <td width='3%'>No</td>
            <td>SPK Marketing</td>
            <td width='15%'>Customer</td>
            <td width='7%'>Width Slitting</td>
            <td width='7%'>Weight Slitting</td>
            <td width='15%'>Lot Number Slitting</td>
			<td width='15%'>Keterangan</td>
			<td width='7%'>Actual <br>Weight<br>Slitting</td>
        </tr>
        <?php 
        $i=0;
        foreach($detail as $val => $dt_spk){ 
		
		  $sum_width += $dt_spk['weight'];
		  $countfiles = $dt_spk['qtycoil'];
		  $id = $dt_spk['id_tr_spk_produksi'] ; 
		  for($loop1=0;$loop1<$countfiles;$loop1++){
			  $loop = $loop1+1;
			  
			  $totalwidth += $dt_spk['weight'];
			  
			  $i++; 
        ?>
            <tr>
                <td width='10' style='vertical-align:top;'  align='center'><?=$loop;?></td>
                <td width='100' style='vertical-align:top;'><?=strtoupper($no_suratx($dt_spk['no_surat']));?></td>
                <td width='100' style='vertical-align:top;'><?=$dt_spk['namacustomer'];?></td>
                <td width='30'  style='vertical-align:top;' align='right'><?=number_format($dt_spk['weight'],2);?></td>
				<td width='30'  style='vertical-align:top;' align='right'><?=number_format($dt_spk['width'],2);?></td>
                <td style='vertical-align:top;' align='left'><?=$lotno.".".$i?></td>
				<?php $ket = $this->db->query("SELECT keterangan FROM dt_tr_spk_produksi WHERE id_tr_spk_produksi ='$id'")->row();  ?>
				<td width='30'  style='vertical-align:top;' align='right'><?=$ket->keterangan?></td>
				<td width='30'  style='vertical-align:top;' align='right'></td>
            </tr>
        <?php
        }
		}
        ?>
    </table>
   <br>
	<table class='gridtable' width='100%'  align="left" border='0' cellpadding='0'>
        <tr>
            <td width='100%'>D. Slitting</td>
            
        </tr>
	</table>
	<table class='gridtable' width='100%'  align="left" border='1' cellpadding='2'>
         <tr>
            <td width='15%'>No</td>
            <td width='15%'>Nama Material</td>
            <td width='15%'>Lebar aktual</td>
			<td width='15%'>Berat aktual</td>
           
         </tr>
		 <tr>
            <td width='15%'>1.</td>
            <td width='15%'>Sisa Potong (kembali ke warehouse)</td>
            <td width='15%'></td>
            <td width='15%'></td>
            
         </tr>
		 <tr>
            <td width='15%'>2.</td>
            <td width='15%'>Scrap pegangan + Scrap sisa</td>
            <td width='15%'></td>
            <td width='15%'></td>
            
        </tr>
	    <tr>
            <td width='15%'>3.</td>
            <td width='15%'>NG Internal</td>
            <td width='15%'></td>
            <td width='15%'></td>
            
        </tr>
		<tr>
            <td width='15%'>4.</td>
            <td width='15%'>NG Eksternal</td>
            <td width='15%'></td>
            <td width='15%'></td>
            
        </tr>
	</table>
</body>