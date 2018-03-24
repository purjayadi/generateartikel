<?php
    function limit_words($string, $word_limit){
        $words = explode(" ",$string);
        return implode(" ",array_splice($words,0,$word_limit));
    }
    include("keyword.txt");
    $bid = count($keyword);
    include("random.txt");
?>
    <h3><strong>Lihat Hasil</strong></h3>
<button class="btn btn-success" onclick="exportTabelKeCSV('brajalink.csv')">Export data ke CSV</button>
<!-- <input type="button" class="btn btn-primary" value="select table"
   onclick="selectElementContents( document.getElementById('table') );"> -->
	<p><br></p>
	<div id="dvData">
<?php
    include("listtext.txt");
?>
	</div>
<script type="text/javascript">
    function selectElementContents(el) {
        var body = document.body, range, sel;
        if (document.createRange && window.getSelection) {
            range = document.createRange();
            sel = window.getSelection();
            sel.removeAllRanges();
            try {
                range.selectNodeContents(el);
                sel.addRange(range);
            } catch (e) {
                range.selectNode(el);
                sel.addRange(range);
            }
        } else if (body.createTextRange) {
            range = body.createTextRange();
            range.moveToElementText(el);
            range.select();
            range.execCommand("Copy");
        }
    }

    function downloadCSV(csv, filename) {
    var fileCSV;
    var linkDonwload;
    // File CSV
    fileCSV = new Blob([csv], {type: "text/csv"});
    // Link download
    linkDonwload = document.createElement("a");
    // Nama file
    linkDonwload.download = filename;
    // Membuat link ke file
    linkDonwload.href = window.URL.createObjectURL(fileCSV);
    // Menyembunyikan link download
    linkDonwload.style.display = "none";
    // Menambahkan link ke DOM
    document.body.appendChild(linkDonwload);
    // Klik link download
    linkDonwload.click();
    }

    function exportTabelKeCSV(filename) {
    var csv = [];
     var baris = document.querySelectorAll("table tr");

        for (var i = 0; i < baris.length; i++) {
      var row = [], cols = baris[i].querySelectorAll("td, th");

            for (var j = 0; j < cols.length; j++)
                row.push(cols[j].innerText);

      csv.push(row.join(","));
     }
        // Download file CSV
        downloadCSV(csv.join("\n"), filename);
    }

</script>
