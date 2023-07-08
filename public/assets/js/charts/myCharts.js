function lineChart() {
    document.addEventListener("DOMContentLoaded", () => {
        new ApexCharts(document.querySelector("#lineChart"), {
            series: [{
                name: "Receita:",
                data:
                    [
                        2500,
                        4154,
                        3578,
                        5100,
                        4987,
                        6200,
                        6911,
                        9122,
                        1481,
                        1457,
                        2000,
                        5000,
                    ]
            }],
            chart: {
                height: 350,
                type: 'line',
                zoom: {
                    enabled: false
                }
            },
            dataLabels: {
                enabled: false
            },
            stroke: {
                curve: 'straight'
            },
            grid: {
                row: {
                    colors: ['#f3f3f3', 'transparent'], // takes an array which will be repeated on columns
                    opacity: 0.5
                },
            },
            xaxis: {
                categories:
                    [
                        'Janeiro',
                        'Fevereiro',
                        'Março',
                        'Abril',
                        'Maio',
                        'Junho',
                        'Julho',
                        'Agosto',
                        'Setembro',
                        'Outubro',
                        'Novembro',
                        'Dezembro'
                    ],
            }
        }).render();
    });
}

function chartVendasProduto() {
    document.addEventListener("DOMContentLoaded", () => {
        echarts.init(document.querySelector("#relacaoVendasProduto"))
            .setOption({
                tooltip: {
                    trigger: 'item'
                },
                legend: {
                    top: '5%',
                    left: 'center'
                },
                series: [{
                    name: 'Valor',
                    type: 'pie',
                    radius: ['40%', '70%'],
                    avoidLabelOverlap: false,
                    itemStyle: {
                        borderRadius: 10,
                        borderColor: '#fff',
                        borderWidth: 2
                    },
                    label: {
                        show: false,
                        position: 'center'
                    },
                    emphasis: {
                        label: {
                            show: true,
                            fontSize: '18',
                            fontWeight: 'bold'
                        }
                    },
                    labelLine: {
                        show: false
                    },
                    data: [{
                        value: 2000,
                        name: 'Vestuário'
                    },
                    {
                        value: 584,
                        name: 'Eletrônico'
                    },
                    {
                        value: 735,
                        name: 'Doméstico'
                    },
                    {
                        value: 580,
                        name: 'Livraria'
                    },
                    {
                        value: 484,
                        name: 'Alimentação'
                    },
                    ]
                }]
            });
    });
}

function chartVendasVendedor() {
    document.addEventListener("DOMContentLoaded", () => {
        echarts.init(document.querySelector("#relacaoVendasVendedor")).setOption({
            tooltip: {
                trigger: 'item'
            },
            legend: {
                top: '5%',
                left: 'center'
            },
            series: [{
                name: 'Access From',
                type: 'pie',
                radius: ['40%', '70%'],
                avoidLabelOverlap: false,
                itemStyle: {
                    borderRadius: 10,
                    borderColor: '#fff',
                    borderWidth: 2
                },
                label: {
                    show: false,
                    position: 'center'
                },
                emphasis: {
                    label: {
                        show: true,
                        fontSize: '18',
                        fontWeight: 'bold'
                    }
                },
                labelLine: {
                    show: false
                },
                data: [{
                    value: 1048,
                    name: 'Vestuário'
                },
                {
                    value: 584,
                    name: 'Eletrônico'
                },
                {
                    value: 735,
                    name: 'Doméstico'
                },
                {
                    value: 580,
                    name: 'Livraria'
                },
                {
                    value: 484,
                    name: 'Alimentação'
                },
                ]
            }]
        });
    });
}
chartVendasProduto()
chartVendasVendedor()
lineChart();
