/*----------------------------GRAPH--------------------------------------------*/
const ctx = document.getElementById('myChart').getContext('2d');
const myChart = new Chart(ctx,
{
    type: 'doughnut',
    data:
    {
      labels:
      [
        'Completed',
        'Ongoing',
        'Yet to complete'
      ],
      datasets:
      [{
        label: 'My First Dataset',
        data: [300, 50, 100],
        backgroundColor:
        [
          'rgb(255, 99, 132)',
          'rgb(54, 162, 235)',
          'rgb(255, 205, 86)'
        ],
        hoverOffset: 4
      }]
    },
    options: {
      scales: {
        y: {
          beginAtZero: true
        }
      }
    }
});

/*----------------------------SEARCH--------------------------------------------*/
const Module=document.querySelectorAll('.Module')
const displayModules=(value)=>{
  Module.forEach(element =>{
    element.style.display="none"
    const title=element.querySelector('h2').innerHTML.toUpperCase();
    const status=element.dataset.status.toUpperCase();
    const recent=element.querySelector('p').innerHTML.toUpperCase();
    if(title.includes(value)){
      element.style.display="block"
    }
    if(status.includes(value)){
      element.style.display="block"
    }
  })
}
searchModule.addEventListener('input',(e) =>{
  displayModules(e.target.value.toUpperCase())
})

modulesFilter.addEventListener('input',(e) =>{
  displayModules(e.target.value.toUpperCase())
})
