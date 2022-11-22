<?php   
    function showcart($cart){
        $kq="";
        $tong=0;
        $stt=1;
        foreach ($cart as $sp){
            $ttien = $sp[3] * $sp[4];
            $tong = $tong + $ttien;
            $kq.='<tr>
                    <td>'.$stt.'</td>
                    <td><img src="'.$sp[1].'" width=100px"></td>
                    <td>'.$sp[2].'</td>
                    <td>'.$sp[3].'</td>
                    <td>'.$sp[4].'</td>
                    <td>'.number_format($ttien,0,',','.').'</td>
                    <td style="text-align:center"><a href="delcart.php?id='.($stt-1).'">Xóa</a></td>
                </tr>';
        

                $stt++;
        }

        $kq.='
        <div class="tab">
            <p>Tổng tiền: '.number_format($tong,0,',','.').'</p>
            <input type="submit" value="đặt hàng">
        </div>
        ';
        return $kq;
    }

?>