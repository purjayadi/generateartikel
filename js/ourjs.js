function WordCount(str) {
  return str.split(" ").length;
}
function exportTableToCSV($table, filename) {
    var $rows = $table.find('tr:has(td)'),
        tmpColDelim = String.fromCharCode(11),
        tmpRowDelim = String.fromCharCode(0),
        colDelim = "';'",
        rowDelim = "'\r\n'",
        csv = "'" + $rows.map(function (i, row) {
            var $row = $(row),
                $cols = $row.find('td');
            return $cols.map(function (j, col) {
                var $col = $(col),
                    text = $col.text();
                return text.replace(/'/g, "''");
            }).get().join(tmpColDelim);
        }).get().join(tmpRowDelim)
            .split(tmpRowDelim).join(rowDelim)
            .split(tmpColDelim).join(colDelim) + "'",
        csvData = 'data:application/csv;charset=utf-8,' + encodeURIComponent(csv);
    $(this)
        .attr({
        'download': filename,
            'href': csvData,
            'target': '_blank'
    });
}
function exportTableToTEXT($table, filename) {
    var $rows = $table.find('tr:has(td)'),
        tmpColDelim = String.fromCharCode(11),
        tmpRowDelim = String.fromCharCode(0),
        colDelim = '\r\n',
        rowDelim = '',
        i = 0,
        text = $rows.map(function (i, row) {
            var $row = $(row),
                $cols = $row.find('td'),
                tmpRecap = "",
                allRecap = "",
                c_allRecap = 0;
            i = 0;
            return $cols.map(function (j, col) {
                var $col = $(col),
                    text = $col.text();
                i++;
                if(i==2) {
                    return text.replace(/"/g, '') + colDelim;
                }
                if(i==3) {
                    tmpRecap = text.replace(/"/g, '');
                }
                if(i==4) {
                    allRecap = tmpRecap + colDelim + text.replace(/"/g, '""');
                    c_allRecap = WordCount(allRecap);
                    return  'Word Count:' + colDelim + c_allRecap + colDelim + colDelim + 'Recap:' + colDelim + tmpRecap + colDelim + colDelim + 'Keywords:' + colDelim + colDelim + colDelim + 'Write-up Body:' + colDelim  + colDelim + tmpRecap + colDelim + text.replace(/"/g, '""') + colDelim + colDelim + '---' + colDelim;
                }
            }).get().join(tmpColDelim);
        }).get().join(tmpRowDelim)
            .split(tmpRowDelim).join(rowDelim)
            .split(tmpColDelim).join(colDelim),
        textData = 'data:text/plain;charset=utf-8,' + encodeURIComponent(text);
    $(this)
        .attr({
        'download': filename,
            'href': textData,
            'target': '_blank'
    });
}
function exportTableToBLOGER($table, filename) {
    var $rows = $table.find('tr:has(td)'),
        tmpColDelim = String.fromCharCode(11),
        tmpRowDelim = String.fromCharCode(0),
        colDelim = '\r\n',
        rowDelim = '',
        tgl = new Date(),
        thetime = tgl.getFullYear() + '-' + ('0' + (tgl.getMonth()+1)).slice(-2) + '-' + ('0' + tgl.getDate()).slice(-2) + 'T' + ('0' + tgl.getHours()).slice(-2) + ':' + ('0' + (tgl.getMinutes()+1)).slice(-2) + ':00.001',
        i = 0,
        text = '<?xml version=\'1.0\' encoding=\'UTF-8\'?>' + colDelim + '<ns0:feed xmlns:ns0="http://www.w3.org/2005/Atom">' + colDelim + '<ns0:generator>Blogger</ns0:generator>' + colDelim + colDelim + $rows.map(function (i, row) {
            var $row = $(row),
                $cols = $row.find('td'),
                tmpJudul = "",
                tmpRecap = "";
            i = 0;
            return $cols.map(function (j, col) {
                var $col = $(col),
                    text = $col.text();
                i++;
                if(i==1){
                    return '<ns0:entry>' + colDelim + '<ns0:category scheme="http://schemas.google.com/g/2005#kind" term="http://schemas.google.com/blogger/2008/kind#post" />';
                }
                if(i==2) {
                    tmpJudul = text.replace(/"/g, '""');
                    return '<ns0:id>' + tmpJudul + '</ns0:id>';
                }
                if(i==3) {
                    tmpRecap = text.replace(/"/g, '""');
                }
                if(i==4) {
                    return '<ns0:content type="html">' + tmpRecap + text.replace(/"/g, '""') + '</ns0:content>' + colDelim + '<ns0:published>' + thetime + '</ns0:published>' + colDelim + '<ns0:title type="html">' + tmpJudul + '</ns0:title>' + colDelim + '</ns0:entry>' + colDelim + colDelim;
                }
            }).get().join(tmpColDelim);
        }).get().join(tmpRowDelim)
            .split(tmpRowDelim).join(rowDelim)
            .split(tmpColDelim).join(colDelim) + '</ns0:feed>'
        textData = 'data:text/plain;charset=utf-8,' + encodeURIComponent(text);
    $(this)
        .attr({
        'download': filename,
            'href': textData,
            'target': '_blank'
    });
}
