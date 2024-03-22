<div class="row">

    <!-- tieu de -->
    <div class="row formtitle mb">
        <h1>Danh sach san pham</h1>
    </div>
    <form method="post" action="index.php?act=listsp">
        <input type="text" name="kyw">
        <select name="iddm">
            <option value="0" selected>Tat ca</option>
            <?php
            foreach ($listdanhmuc as $danhmuc) {
                extract($danhmuc);
                echo '<option value="' . $id . '">' . $name . '</option>';
            }

            ?>
        </select>
        <input type="submit" name="listok" value="GO">
    </form>
    <!-- end tieu de -->

    <!-- fromcontent -->
    <div class="row formcontent">

        <div class="row mb10 formdsloaihang">
            <!-- cot -->
            <table>
                <tr>
                    <th>..</th>
                    <th>ma san pham</th>
                    <th>ten san pham</th>
                    <th>hinh</th>
                    <th>gia</th>
                    <th>luot xem</th>
                    <th>mo ta</th>
                    <th>action</th>
                </tr>

                <?php
                foreach ($listsanpham as $sanpham) {
                    extract($sanpham);
                    $suasp = "index.php?act=suasp&id=" . $id;
                    $xoasp = "index.php?act=xoasp&id=" . $id;
                    $hinhpath = "../upload/" . $img;
                    if (is_file($hinhpath)) {
                        $hinh = "<img src='" . $hinhpath . "' height='80'>";
                    } else {
                        $hinh = "no image";
                    }

                    echo '
                        <tr>
                            <td><input type="checkbox" name="" id=""></td>
                            <td>' . $id . '</td>
                            <td>' . $name . '</td>
                            <td>' . $hinh . '</td>
                            <td>' . $price . '</td>
                            <td>' . $luotxem . '</td>
                            <td>' . $mota . '</td>
                            <td>
                                <a href ="' . $suasp . '"><input type="button" value="sua"></a>
                                <a href ="' . $xoasp . '"><input type="button" value="xoa"></a>
                            </td>
                        </tr>
                        ';
                }

                ?>

            </table>
        </div>

        <div class="row mb10">
            <input type="button" value="chon tat ca">
            <input type="button" value="bo chon tat ca">
            <input type="button" value="xoa cac muc da chon">
            <a href="index.php?act=addsp"><input type="button" value="nhap them"></a>
        </div>
    </div>
    <!-- end formcontent -->
</div>