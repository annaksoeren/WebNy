  /*Video API*/
  const loadVideo = (iframe) => {
    const channelid = "UCJ-zQg5V_AReDkYJf4XCj4A";
    const channelURL = encodeURIComponent(`https://www.youtube.com/feeds/videos.xml?channel_id=${channelid}`)
    const reqURL = `https://api.rss2json.com/v1/api.json?rss_url=${channelURL}`;

    fetch(reqURL)
        .then(response => response.json())
        .then(result => {
          console.log(result)
            const videoNumber = iframe.getAttribute('vidnum')
            const link = result.items[videoNumber].link;
            const id = link.substr(link.indexOf("=") + 1);
            iframe.setAttribute("src", `https://youtube.com/embed/${id}?controls=0&autoplay=1`);
        })
        .catch(error => console.log('error', error));
}

const iframes = document.getElementsByClassName('latestVideo');
for (let i = 0, len = iframes.length; i < len; i++) {
    loadVideo(iframes[i]);
}
