import './bootstrap';
import 'preline';

import DataTable from 'datatables.net-dt';
import 'datatables.net-dt/css/dataTables.dataTables.css';

document.addEventListener('DOMContentLoaded', () => {
    new DataTable('#myTable');
});
