function BufferLoader(t,o,e){this.context=t,this.urlList=o,this.onload=e,this.bufferList=new Array,this.loadCount=0}function loadBuffers(){var t=[],o=[];for(var e in BUFFERS_TO_LOAD){var r=BUFFERS_TO_LOAD[e];t.push(e),o.push(r)}bufferLoader=new BufferLoader(context,o,function(o){for(var e=0;e<o.length;e++){var r=o[e],n=t[e];BUFFERS[n]=r}}),bufferLoader.load()}BufferLoader.prototype.loadBuffer=function(t,o){var e=new XMLHttpRequest;e.open("GET",t,!0),e.responseType="arraybuffer";var r=this;e.onload=function(){r.context.decodeAudioData(e.response,function(e){return e?(r.bufferList[o]=e,void(++r.loadCount==r.urlList.length&&r.onload(r.bufferList))):void alert("error decoding file data: "+t)},function(t){console.error("decodeAudioData error",t)})},e.onerror=function(){alert("BufferLoader: XHR error")},e.send()},BufferLoader.prototype.load=function(){for(var t=0;t<this.urlList.length;++t)this.loadBuffer(this.urlList[t],t)};var BUFFERS={},context=null,BUFFERS_TO_LOAD={kick:"sounds/kick.wav",snare:"sounds/snare.wav",hihat:"sounds/hihat.wav"};document.addEventListener("DOMContentLoaded",function(){try{window.AudioContext=window.AudioContext||window.webkitAudioContext,context=new AudioContext}catch(t){alert("Web Audio API is not supported in this browser")}loadBuffers()});var RhythmSample={};RhythmSample.play=function(){function t(t,o){var e=context.createBufferSource();e.buffer=t,e.connect(context.destination),e.start||(e.start=e.noteOn),e.start(o)}for(var o=BUFFERS.kick,e=BUFFERS.snare,r=BUFFERS.hihat,n=context.currentTime+.1,a=120,i=60/a,u=0;2>u;u++)for(var f=n+8*u*i,d=0;8>d;++d)t(r,f+d*i)},console.log("javascript completed");