<!DOCTYPE html>
<html>
<head>
    <title>Auto Refresh</title>
    <script>
        function refreshData() {
            fetch('api/index.php')
                .then(response => response.text());
        }

        setInterval(refreshData, 60*1000); // refresh dalam 1 menit
    </script>
</head>
</html>
