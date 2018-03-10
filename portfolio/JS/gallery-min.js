window.addEventListener('load',galleryReady,!1);var currentIndex;var thumbs;var projects;function galleryReady(){thumbs=document.querySelectorAll('.thumb');projects=document.querySelectorAll('.project');addListener('click',thumbs,getIndex);}
function addListener(eventString,arrayList,functionName){for(var i=0;i<arrayList.length;i++){arrayList[i].addEventListener(eventString,functionName,!1);}}
function displayProject(index){var projectThumbIndex=index;var target=projects[projectThumbIndex];projects.forEach(function(p){if(!p.classList.contains('hidden')){p.classList.add('hidden');}});if(target.classList.contains('hidden')){target.classList.remove('hidden');}}
function getIndex(){var thumbArray=Array.from(thumbs);displayProject(thumbArray.indexOf(this));}
