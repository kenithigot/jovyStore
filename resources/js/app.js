import './bootstrap';
import 'preline';

// DataTable Library
import DataTable from 'datatables.net-dt';
import 'datatables.net-dt/css/dataTables.dataTables.css';

// Charts and Graph
import ApexCharts from 'apexcharts';

window.addEventListener('load', () => {

    const chartEl = document.querySelector('#hs-single-area-chart');
    if (!chartEl) return;

    const options = {
        chart: {
            height: 300,
            type: 'area',
            toolbar: { show: false },
            zoom: { enabled: false },
        },
        series: [
            {
                name: 'Visitors',
                data: [180, 51, 60, 38, 88, 50, 40, 52, 88, 80, 60, 70],
            },
        ],
        legend: {
            show: false
        },
        dataLabels: {
            enabled: false
        },
        stroke: {
            curve: 'smooth',
            width: 2,
        },
        grid: {
            strokeDashArray: 2,
            borderColor: '#e5e7eb',
        },
        fill: {
            type: 'gradient',
            gradient: {
                shadeIntensity: 1,
                opacityFrom: 0.1,
                opacityTo: 0.8,
                stops: [0, 90, 100],
                colorStops: [
                    {
                        offset: 0,
                        color: '#ea580c', // orange-600
                        opacity: 0.8,
                    },
                    {
                        offset: 100,
                        color: '#ea580c',
                        opacity: 0.2,
                    },
                ],
            },
        },
        xaxis: {
            categories: [
                '25 Jan', '26 Jan', '27 Jan', '28 Jan',
                '29 Jan', '30 Jan', '31 Jan', '1 Feb',
                '2 Feb', '3 Feb', '4 Feb', '5 Feb',
            ],
            labels: {
                style: {
                    colors: '#ea580c',
                    fontSize: '13px',
                    fontFamily: 'Inter, ui-sans-serif',
                },
            },
            axisBorder: {
                show: false
            },
            axisTicks: {
                show: false
            },
            crosshairs: {
                stroke: {
                    dashArray: 0
                },
                dropShadow: {
                    show: false
                }
            },
        },
        yaxis: {
            labels: {
                style: {
                    colors: '#ea580c',
                    fontSize: '13px',
                    fontFamily: 'Inter, ui-sans-serif',
                },
            },
        },
        colors: ['#ea580c'],
    };

    new ApexCharts(chartEl, options).render();
});



window.addEventListener('load', () => {
    const barGraph = document.querySelector('#hs-single-bar-chart');
    if (!barGraph) return;

    const options = {
        chart: {
            type: 'bar',
            height: 350,
            toolbar: { show: false },
            zoom: { enabled: false }
        },
        series: [
            {
                name: 'Sales',
                data: [23000, 44000, 55000, 57000, 56000, 61000, 58000, 63000, 60000, 66000, 34000, 78000]
            }
        ],
        plotOptions: {
            bar: {
                horizontal: false,
                columnWidth: '20px',
                borderRadius: 4
            }
        },
        legend: { show: false },
        dataLabels: { enabled: false },
        stroke: {
            show: true,
            width: 4,
            colors: ['transparent']
        },
        xaxis: {
            categories: [
                'January', 'February', 'March', 'April', 'May', 'June',
                'July', 'August', 'September', 'October', 'November', 'December'
            ],
            axisBorder: { show: false },
            axisTicks: { show: false },
            labels: {
                style: {
                    colors: '#ea580c',
                    fontSize: '13px',
                    fontFamily: 'Inter, ui-sans-serif',
                    fontWeight: 400
                },
                formatter: (title) => title.slice(0, 3)
            }
        },
        yaxis: {
            labels: {
                align: 'left',
                style: {
                    colors: '#ea580c',
                    fontSize: '13px',
                    fontFamily: 'Inter, ui-sans-serif',
                    fontWeight: 400
                },
                formatter: (value) => value >= 1000 ? `${value / 1000}k` : value
            }
        },
        tooltip: {
            y: {
                formatter: (value) => `$${value >= 1000 ? `${value / 1000}k` : value}`
            }
        },
        colors: ['#ea580c'], // orange bars
        grid: {
            borderColor: '#e5e7eb',
            strokeDashArray: 3,
        },
        states: {
            hover: {
                filter: { type: 'darken', value: 0.9 }
            }
        },
        responsive: [{
            breakpoint: 568,
            options: {
                chart: { height: 250 },
                plotOptions: { bar: { columnWidth: '12px' } },
                xaxis: {
                    labels: {
                        style: {
                            colors: '#9ca3af',
                            fontSize: '11px'
                        }
                    }
                },
                yaxis: {
                    labels: {
                        style: {
                            colors: '#9ca3af',
                            fontSize: '11px'
                        }
                    }
                }
            }
        }]
    };

    const chart = new ApexCharts(barGraph, options);
    chart.render();
});









