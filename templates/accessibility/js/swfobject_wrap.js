function embedswf(cfg) {
  var params = {};
  var video_attrs;
  for(var name in (cfg.params || {})) {
    if(name == 'video') {
      video_attrs = cfg.params.video;
      continue;
    }

    if (cfg.params.hasOwnProperty(name)) {
      params[name] = encodeURIComponent(cfg.params[name]);
    }
  }
  
  swfobject.embedSWF(cfg.url, cfg.el, cfg.width, cfg.height, cfg.ver,
                     cfg.express, params, {
                       allowscriptaccess: 'always',
                       allowfullscreen: true,
                       bgcolor: '#ffffff',
                       wmode: 'transparent'
                     }, {'video': video_attrs});
}
