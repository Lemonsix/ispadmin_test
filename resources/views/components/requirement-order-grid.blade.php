 <!-- Include the JS for AG Grid -->
 <script src="https://cdn.jsdelivr.net/npm/ag-grid-community/dist/ag-grid-community.min.noStyle.js"></script>
 <!-- Include the core CSS, this is needed by the grid -->
 <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/ag-grid-community/styles/ag-grid.css" />
 <!-- Include the theme CSS, only need to import the theme you are going to use -->
 <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/ag-grid-community/styles/ag-theme-alpine.css" />


 <!-- The div that will host the grid. ag-theme-alpine is the theme. -->
 <!-- The gid will be the size that this element is given. -->
 <div id="myGrid" class="ag-theme-alpine-dark" style="height: 80vh; width: 80vw"></div>

 <script>
     window.onload = () => {
         axios.get('/api/getData').then(function(response) {
                 const gridOptions = {
                     columnDefs: [
                        {headerName:"N°",field: "pv+id"},
                        {headerName:"Solicitante:",field: "user_id"},
                        {headerName:"Fecha",field: 'created_at'},
                        {headerName:"Status", field: "status"},
                        {headerName:"Fecha req",field:"deadline"},
                        {headerName:"Prioridad",field: "priority"}],
                     rowData: response.data
                 };
                 console.log(response.data);
                 // Pass the gridOptions object to the ag-Grid constructor to create the table
                 var gridDiv = document.querySelector('#myGrid');
                 new agGrid.Grid(gridDiv, gridOptions);

             })
             .catch(function(error) {
                 console.log(error);
             });
     };
 </script>
