
    <thead>
        <tr>
            <th>Judul</th>
            <th>Kategori</th>
            <th>Penulis</th>
            <th>Tanggal Post</th>
            <th>Tanggal Update</th>
            <th></th>
        </tr>
    </thead>
    <tbody>
        <?php
            if ($allpost) {
                if ($allpost->getNumRows() > 0) {
                    foreach ($allpost->getResultArray() as $data){
                        $created = strftime('%e %b %Y', strtotime($data['created_at']));
                        $updated = strftime('%e %b %Y', strtotime($data['updated_at']));
                        echo "<tr>
                        <td><a href='/detail-artikel/$data[slug]'>$data[judul]</a></td>
                        <td>$data[kategori]</td>
                        <td>$data[penulis]</td>
                        <td>$created</td>
                        <td>$updated</td>
                        <td>button</td>
                    </tr>";
                    }
                }else{
                    echo "<tr>
                        <td colspan='6'>No Data</td>
                    </tr>";
                }
            }else{
                echo "<tr>
                    <td colspan='6'>No Data</td>
                </tr>";
            }
        ?>
        
    </tbody>