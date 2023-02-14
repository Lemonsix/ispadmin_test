if (document.getElementById("showRequirementOrder") != undefined) {
    var columnDefs = [
        {
            headerName: "N°",
            field: "order_number",
            cellRenderer: (params) => {
                const url = document
                    .getElementById("showRequirementOrder")
                    .value.slice(0, -1);
                return `<a href="${url}${params.data.id}">${params.value}</a>`;
            },
        },
        { headerName: "Solicitante:", field: "user.name" },
        { headerName: "Fecha", field: "created_at" },
        { headerName: "Status", field: "status" },
        { headerName: "Fecha req", field: "deadline" },
        { headerName: "Prioridad", field: "priority" },
        { headerName: "Items", field: "order_details_count" },
    ];

    const gridOptions = {
        defaultColDef: { resizable: true, filter: true },
        columnDefs: columnDefs,
        rowData: null,
    };

    function autoSizeAll(skipHeader) {
        const allColumnIds = [];
        gridOptions.columnApi.getColumns().forEach((column) => {
            allColumnIds.push(column.getId());
        });

        gridOptions.columnApi.autoSizeColumns(allColumnIds, skipHeader);
    }

    window.onload = () => {
        axios
            .get("/api/getData")
            .then((response) => {
                console.log(response.data);
                gridOptions.rowData = response.data;
                var gridDiv = document.querySelector("#myGrid");
                new agGrid.Grid(gridDiv, gridOptions);
                autoSizeAll();
            })
            .catch(function (error) {
                console.error(error);
            });
    };
}
