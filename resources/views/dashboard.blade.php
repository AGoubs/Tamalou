<x-app-layout>
  <x-slot name="header">
    <h2 class="font-semibold text-xl text-gray-800 leading-tight">
      {{ __('Dashboard') }}
    </h2>
  </x-slot>

  <section id="dashboard">
    <div class="relative bg-blueGray-800 md:pt-6 pb-16 pt-6">
      <div class="px-4 md:px-10 mx-auto w-full">
        <div>
          <h2 class="text-2xl font-bold leading-7 text-gray-900 sm:text-3xl sm:truncate px-6 py-6">
            Dernières Informations
          </h2>
          <div class="flex flex-wrap">
            <div class="w-full lg:w-6/12 xl:w-3/12 px-4">
              <div class="relative flex flex-col min-w-0 break-words bg-white rounded mb-6 xl:mb-0 shadow-lg">
                <div class="flex-auto p-4">
                  <div class="flex flex-wrap">
                    <div class="relative w-full pr-4 max-w-full flex-grow flex-1">
                      <h5 class="text-blueGray-400 uppercase font-bold text-xs">Vos informations</h5><span
                        class="font-semibold text-xl text-blueGray-700">{{ Auth::user()->first_name }}
                        {{ Auth::user()->name }}</span>
                    </div>
                    <div class="relative w-auto pl-4 flex-initial">
                      <div
                        class="text-white p-3 text-center inline-flex items-center justify-center w-12 h-12 shadow-lg rounded-full bg-green-500">
                        <i class="fas fa-user"></i>
                      </div>
                    </div>
                  </div>
                  <p class="text-sm text-blueGray-400 mt-4"><span class="text-emerald-500 mr-2"><i
                        class="fas fa-envelope"></i></span><span
                      class="whitespace-nowrap">{{ Auth::user()->email }}</span>
                  </p>
                </div>
              </div>
            </div>
            <div class="w-full lg:w-6/12 xl:w-3/12 px-4">
              <div class="relative flex flex-col min-w-0 break-words bg-white rounded mb-6 xl:mb-0 shadow-lg">
                <div class="flex-auto p-4">
                  <div class="flex flex-wrap">
                    <div class="relative w-full pr-4 max-w-full flex-grow flex-1">
                      <h5 class="text-blueGray-400 uppercase font-bold text-xs">MEDECIN TRAITANT</h5><span
                        class="font-semibold text-xl text-blueGray-700">Dr ROBINSON</span>
                    </div>
                    <div class="relative w-auto pl-4 flex-initial">
                      <div
                        class="text-white p-3 text-center inline-flex items-center justify-center w-12 h-12 shadow-lg rounded-full bg-blue-500">
                        <i class="fas fa-user-md"></i>
                      </div>
                    </div>
                  </div>
                  <p class="text-sm text-blueGray-400 mt-4"><span class="text-emerald-500 mr-2"><i
                        class="fas fa-mobile-alt"></i> Tél</span><span class="whitespace-nowrap"> 06 51 02 89 89</span>
                  </p>
                </div>
              </div>
            </div>
            <div class="w-full lg:w-6/12 xl:w-3/12 px-4">
              <div class="relative flex flex-col min-w-0 break-words bg-white rounded mb-6 xl:mb-0 shadow-lg">
                <div class="flex-auto p-4">
                  <div class="flex flex-wrap">
                    <div class="relative w-full pr-4 max-w-full flex-grow flex-1">
                      <h5 class="text-blueGray-400 uppercase font-bold text-xs">Nombre de cas Covid</h5><span
                        class="font-semibold text-xl text-blueGray-700">{{ number_format($responseBody->conf) }}</span>
                    </div>
                    <div class="relative w-auto pl-4 flex-initial">
                      <div
                        class="text-white p-3 text-center inline-flex items-center justify-center w-12 h-12 shadow-lg rounded-full bg-red-500">
                        <i class="fas fa-viruses"></i>
                      </div>
                    </div>
                  </div>
                  <p class="text-sm text-blueGray-400 mt-4"><span class="text-red-500 mr-2"><i
                        class="fas fa-arrow-up"></i> 18.02%</span><span class="whitespace-nowrap">Depuis la semaine
                      dernière</span></p>
                </div>
              </div>
            </div>
            <div class="w-full lg:w-6/12 xl:w-3/12 px-4">
              <div class="relative flex flex-col min-w-0 break-words bg-white rounded mb-6 xl:mb-0 shadow-lg">
                <div class="flex-auto p-4">
                  <div class="flex flex-wrap">
                    <div class="relative w-full pr-4 max-w-full flex-grow flex-1">
                      <h5 class="text-blueGray-400 uppercase font-bold text-xs">Nombre de nouveaux cas confirmés</h5>
                      <span
                        class="font-semibold text-xl text-blueGray-700">{{ number_format($responseBody->conf_j1) }}</span>
                    </div>
                    <div class="relative w-auto pl-4 flex-initial">
                      <div
                        class="text-white p-3 text-center inline-flex items-center justify-center w-12 h-12 shadow-lg rounded-full bg-purple-500">
                        <i class="fas fa-people-arrows"></i>
                      </div>
                    </div>
                  </div>
                  <p class="text-sm text-blueGray-400 mt-4"><span class="text-red-500 mr-2"><i
                        class="fas fa-arrow-up"></i> 5.10%</span><span class="whitespace-nowrap">Depuis hier</span></p>
                </div>
              </div>
            </div>

          </div>
        </div>
      </div>
    </div>
    <div class="flex flex-wrap">
      <div class="w-full xl:w-8/12 mb-12 xl:mb-0 px-12">
        <div class="relative flex flex-col min-w-0 break-words w-full mb-6 shadow-lg rounded bg-white">
          <div class="rounded-t mb-0 px-4 py-3 bg-transparent">
            <div class="flex flex-wrap items-center">
              <div class="relative w-full max-w-full flex-grow flex-1">
                <h6 class="uppercase mb-1 text-xs font-semibold">Vue d'ensemble</h6>
                <h2 class="text-xl font-semibold">Evolution du nombre de cas confirmés (en millions)</h2>
              </div>
            </div>
          </div>
          <div class="p-4 flex-auto">
            <div class="relative h-350-px">
              <div class="chartjs-size-monitor">
                <div class="chartjs-size-monitor-expand">
                  <div class=""></div>
                </div>
                <div class="chartjs-size-monitor-shrink">
                  <div class=""></div>
                </div>
              </div><canvas id="line-chart" style="display: block; height: 350px; width: 678px;" width="1017"
                height="525" class="chartjs-render-monitor"></canvas>
            </div>
          </div>
        </div>
      </div>
      <div class="w-full xl:w-4/12 pr-12">
        <div class="relative flex flex-col min-w-0 break-words bg-white w-full mb-6 shadow-lg rounded">
          <div class="rounded-t mb-0 px-4 py-3 bg-transparent">
            <div class="flex flex-wrap items-center">
              <div class="relative w-full max-w-full flex-grow flex-1">
                <h6 class="uppercase text-blueGray-400 mb-1 text-xs font-semibold">Vue d'ensemble</h6>
                <h2 class="text-blueGray-700 text-xl font-semibold">Nombre de personnes vaccinées en france</h2>
              </div>
            </div>
          </div>
          <div class="p-4 flex-auto">
            <div class="relative h-350-px">
              <div class="chartjs-size-monitor">
                <div class="chartjs-size-monitor-expand">
                  <div class=""></div>
                </div>
                <div class="chartjs-size-monitor-shrink">
                  <div class=""></div>
                </div>
              </div><canvas id="bar-chart" style="display: block; height: 350px; width: 307px;" width="460" height="525"
                class="chartjs-render-monitor"></canvas>
            </div>
          </div>
        </div>
      </div>
    </div>
  </section>
  <x-slot name="footer">
    <h2 class="font-semibold text-xl text-gray-800 leading-tight">
      {{ __('Dashboard') }}
    </h2>
  </x-slot>
</x-app-layout>

<script>
  let configBar = {
    type: "bar",
    data: {
      labels: [
        "Juillet",
        "Août",
        "Septembre",
        "Octobre",
        "Novembre",
        "Décembre",
        "Janvier",
      ],
      datasets: [
        {
          label: new Date().getFullYear() - 1,
          fill: false,
          backgroundColor: "#5bb974",
          borderColor: "#5bb974",
          data: [30, 34, 39, 45, 50, 52, 53],
          barThickness: 8,
        },
      ],
    },
    options: {
      maintainAspectRatio: false,
      responsive: true,
      title: {
        display: false,
        text: "Orders Chart",
      },
      tooltips: {
        mode: "index",
        intersect: false,
      },
      hover: {
        mode: "nearest",
        intersect: true,
      },
      legend: {
        labels: {
          fontColor: "rgba(0,0,0,.4)",
        },
        align: "end",
        position: "bottom",
      },
      scales: {
        xAxes: [{
          display: false,
          scaleLabel: {
            display: true,
            labelString: "Month",
          },
          gridLines: {
            borderDash: [2],
            borderDashOffset: [2],
            color: "rgba(33, 37, 41, 0.3)",
            zeroLineColor: "rgba(33, 37, 41, 0.3)",
            zeroLineBorderDash: [2],
            zeroLineBorderDashOffset: [2],
          },
        }, ],
        yAxes: [{
          display: true,
          scaleLabel: {
            display: false,
            labelString: "Value",
          },
          gridLines: {
            borderDash: [2],
            drawBorder: false,
            borderDashOffset: [2],
            color: "rgba(33, 37, 41, 0.2)",
            zeroLineColor: "rgba(33, 37, 41, 0.15)",
            zeroLineBorderDash: [2],
            zeroLineBorderDashOffset: [2],
          },
        }, ],
      },
    },
  };
  let ctxBar = document.getElementById("bar-chart").getContext("2d");
  window.myBar = new Chart(ctxBar, configBar);

  var config = {
    type: "line",
    data: {
      labels: [
        "Juillet",
        "Août",
        "Septembre",
        "Octobre",
        "Novembre",
        "Décembre",
        "Janvier",
      ],
      datasets: [{
          label: new Date().getFullYear() - 1,
          backgroundColor: "#4c51bf",
          borderColor: "#4c51bf",
          data: [0.5, 1, 1.5, 1.5, 3, 9, 14.5],
          fill: false,
        }
      ],
    },
    options: {
      maintainAspectRatio: false,
      responsive: true,
      title: {
        display: false,
        text: "Sales Charts",
        fontColor: "white",
      },
      legend: {
        labels: {
          fontColor: "white",
        },
        align: "end",
        position: "bottom",
      },
      tooltips: {
        mode: "index",
        intersect: false,
      },
      hover: {
        mode: "nearest",
        intersect: true,
      },
      scales: {
        xAxes: [{
          ticks: {
            fontColor: "rgba(255,255,255,1)",
          },
          display: true,
          scaleLabel: {
            display: false,
            labelString: "Mois",
            fontColor: "white",
          },
          gridLines: {
            display: false,
            borderDash: [2],
            borderDashOffset: [2],
            color: "rgba(33, 37, 41, 1)",
            zeroLineColor: "rgba(0, 0, 0, 0)",
            zeroLineBorderDash: [2],
            zeroLineBorderDashOffset: [2],
          },
        }, ],
        yAxes: [{
          ticks: {
            fontColor: "rgba(255,255,255,1)",
          },
          display: true,
          scaleLabel: {
            display: false,
            labelString: "Valeur",
            fontColor: "white",
          },
          gridLines: {
            borderDash: [3],
            borderDashOffset: [3],
            drawBorder: false,
            color: "rgba(255, 255, 255, 1)",
            zeroLineColor: "rgba(33, 37, 41, 0)",
            zeroLineBorderDash: [2],
            zeroLineBorderDashOffset: [2],
          },
        }, ],
      },
    },
  };
  var ctx = document.getElementById("line-chart").getContext("2d");
  window.myLine = new Chart(ctx, config);
</script>
