// instagram gallery
document.addEventListener('DOMContentLoaded', function() {

  var INSTAGRAM = {

    init: function() {

      var container = document.querySelector('[data-instagram]');

      if (!container) return;

      var stream = container.getAttribute('data-instagram');

      INSTAGRAM.instaLoad(stream);

    },


    instaLoad: function(stream) {

      var req = new XMLHttpRequest();
      var url = 'https://www.instagram.com/' + stream + '/?__a=1';
      req.overrideMimeType('application/json');
      req.open('GET', url, true);
      req.onload = function() {
        if (req.status == 404) {
          INSTAGRAM.instaLocal(stream);
        }
        else {
          var data = JSON.parse(this.response);
          // console.log(data.graphql.user.edge_owner_to_timeline_media.edges);
          INSTAGRAM.instaGallery(data.graphql.user.edge_owner_to_timeline_media.edges, 'stream');
        }
      }
      req.send(null);

    },

    instaLocal: function(stream) {

      var img;

      // grooming
      if (stream === 'puppys_playpen_grooming') {

        img = [
          'https://instagram.fmkc1-1.fna.fbcdn.net/v/t51.2885-15/sh0.08/e35/s640x640/129365648_387753332496123_2527603053385417485_n.jpg?_nc_ht=instagram.fmkc1-1.fna.fbcdn.net&_nc_cat=103&_nc_ohc=RYF1nuRjC8gAX9RRHLW&tp=1&oh=d5115633446519fd31bd0aa9ef026d84&oe=600029D3',
          'https://instagram.fmkc1-1.fna.fbcdn.net/v/t51.2885-15/sh0.08/e35/s640x640/129773912_190330846078991_1444468505822511984_n.jpg?_nc_ht=instagram.fmkc1-1.fna.fbcdn.net&_nc_cat=111&_nc_ohc=PeH6a_V3ZswAX9zNe3K&tp=1&oh=9194ad5b5d49e866cb74a7562b39f23a&oe=5FFD787F',
          'https://instagram.fmkc1-1.fna.fbcdn.net/v/t51.2885-15/sh0.08/e35/s640x640/129783183_510246583233901_5918309025436890741_n.jpg?_nc_ht=instagram.fmkc1-1.fna.fbcdn.net&_nc_cat=101&_nc_ohc=IPnlcGNuJ_wAX9sGuWm&tp=1&oh=d76349197b287edcafe93dd49dc3f4fc&oe=5FFEE8DA',
          'https://instagram.fmkc1-1.fna.fbcdn.net/v/t51.2885-15/sh0.08/e35/s640x640/123600568_272369720847025_8139413596413982758_n.jpg?_nc_ht=instagram.fmkc1-1.fna.fbcdn.net&_nc_cat=101&_nc_ohc=yPv4R93eVv0AX993NFh&tp=1&oh=9cdf7af6f2724b084b68a5a3dd831a9f&oe=5FFEF981',
          'https://instagram.fmkc1-1.fna.fbcdn.net/v/t51.2885-15/sh0.08/e35/s640x640/123567421_656597625034593_1229525149399997489_n.jpg?_nc_ht=instagram.fmkc1-1.fna.fbcdn.net&_nc_cat=109&_nc_ohc=6ak04x_UF8gAX8-yReL&tp=1&oh=e87d199b84064a6fa5f9a0bc3b2e13f7&oe=5FFD7406',
          'https://instagram.fmkc1-1.fna.fbcdn.net/v/t51.2885-15/sh0.08/e35/s640x640/123379725_1627188137453427_75434828081099870_n.jpg?_nc_ht=instagram.fmkc1-1.fna.fbcdn.net&_nc_cat=103&_nc_ohc=R1s8OYpCEOgAX-TmZK-&tp=1&oh=6c6dc08c98c40fc67720d3a51d34d149&oe=6000B9D1'
        ];

      }
      // normal
      else {

        img = [
          'https://instagram.fmkc1-1.fna.fbcdn.net/v/t51.2885-15/sh0.08/e35/s640x640/129365648_387753332496123_2527603053385417485_n.jpg?_nc_ht=instagram.fmkc1-1.fna.fbcdn.net&_nc_cat=103&_nc_ohc=RYF1nuRjC8gAX9RRHLW&tp=1&oh=d5115633446519fd31bd0aa9ef026d84&oe=600029D3',
          'https://instagram.fmkc1-1.fna.fbcdn.net/v/t51.2885-15/sh0.08/e35/s640x640/129773912_190330846078991_1444468505822511984_n.jpg?_nc_ht=instagram.fmkc1-1.fna.fbcdn.net&_nc_cat=111&_nc_ohc=PeH6a_V3ZswAX9zNe3K&tp=1&oh=9194ad5b5d49e866cb74a7562b39f23a&oe=5FFD787F',
          'https://instagram.fmkc1-1.fna.fbcdn.net/v/t51.2885-15/sh0.08/e35/s640x640/129744394_709567203328909_6372421384989895383_n.jpg?_nc_ht=instagram.fmkc1-1.fna.fbcdn.net&_nc_cat=101&_nc_ohc=ifeLve2zT30AX8qRrjE&tp=1&oh=9f7e732c8caa00071b448b9feca043d6&oe=6000CB1F',
          'https://instagram.fmkc1-1.fna.fbcdn.net/v/t51.2885-15/sh0.08/e35/c0.3.1440.1440a/s640x640/128584295_706544620279060_8618123824847366142_n.jpg?_nc_ht=instagram.fmkc1-1.fna.fbcdn.net&_nc_cat=104&_nc_ohc=fTMONSTJ8OsAX9DmBZe&tp=1&oh=d0a216c75b6c77507f487ecf10cd3b03&oe=6000EAF7',
          'https://instagram.fmkc1-1.fna.fbcdn.net/v/t51.2885-15/sh0.08/e35/s640x640/126908295_388997312446139_8548337006520085180_n.jpg?_nc_ht=instagram.fmkc1-1.fna.fbcdn.net&_nc_cat=111&_nc_ohc=wRrl21_PcloAX_044t6&tp=1&oh=865027e1709835d346596dfe0ab28a27&oe=5FFF9D5E',
          'https://instagram.fmkc1-1.fna.fbcdn.net/v/t51.2885-15/sh0.08/e35/s640x640/125916448_806900030089743_6837073696205483649_n.jpg?_nc_ht=instagram.fmkc1-1.fna.fbcdn.net&_nc_cat=103&_nc_ohc=LPwkEHVB-4QAX-wH84u&tp=1&oh=a53af557381962df0c24b822a6931428&oe=5FFDF63B',
          'https://instagram.fmkc1-1.fna.fbcdn.net/v/t51.2885-15/sh0.08/e35/c155.0.734.734a/s640x640/125342098_837789203682778_5444711128204817030_n.jpg?_nc_ht=instagram.fmkc1-1.fna.fbcdn.net&_nc_cat=110&_nc_ohc=KKY8PW4_yc0AX_LUTu6&tp=1&oh=9e35cd594259dec98904bba13de7c7b7&oe=5FFDFBEB',
          'https://instagram.fmkc1-1.fna.fbcdn.net/v/t51.2885-15/sh0.08/e35/s640x640/125092335_206936900796251_8634886094897603390_n.jpg?_nc_ht=instagram.fmkc1-1.fna.fbcdn.net&_nc_cat=111&_nc_ohc=yAEMoZvKBocAX8WpAir&tp=1&oh=5d45264d86b5fe0376f1ba356467cdab&oe=5FFE0CC9',
          'https://instagram.fmkc1-1.fna.fbcdn.net/v/t51.2885-15/sh0.08/e35/s640x640/124275098_712824145991583_8137230020146722954_n.jpg?_nc_ht=instagram.fmkc1-1.fna.fbcdn.net&_nc_cat=103&_nc_ohc=gTZme3_t2vQAX_dtY9a&tp=1&oh=dfdd1015ed9c4459721ed3d0e47f8670&oe=5FFE7017',
          'https://instagram.fmkc1-1.fna.fbcdn.net/v/t51.2885-15/sh0.08/e35/s640x640/123839005_371522037612115_6772019023589927015_n.jpg?_nc_ht=instagram.fmkc1-1.fna.fbcdn.net&_nc_cat=107&_nc_ohc=KJvjmFROfFEAX9-lbWS&tp=1&oh=4080124122aceabbb2b0a6e3349bf83a&oe=60002781',
          'https://instagram.fmkc1-1.fna.fbcdn.net/v/t51.2885-15/sh0.08/e35/s640x640/123295641_1144860022612621_1191172702370071933_n.jpg?_nc_ht=instagram.fmkc1-1.fna.fbcdn.net&_nc_cat=101&_nc_ohc=nJP8Rx-RxiYAX9La9Tv&tp=1&oh=3f51956ab34b25d68166f8e9dc5c1e28&oe=5FFD835D',
          'https://instagram.fmkc1-1.fna.fbcdn.net/v/t51.2885-15/sh0.08/e35/c0.176.1440.1440a/s640x640/123144803_2850685268493892_4030488956344638518_n.jpg?_nc_ht=instagram.fmkc1-1.fna.fbcdn.net&_nc_cat=104&_nc_ohc=KGc-LgOtpuUAX_D0Dth&tp=1&oh=4cb7cc9ec9cd5af3e1b558cd28340f56&oe=5FFF0D3F'
        ];

      }

      INSTAGRAM.instaGallery(img, 'local');

    },

    instaGallery: function(data, type) {

      var container = document.querySelector('[data-instagram]');

      Object.keys(data).forEach(key => {

        var li = document.createElement('li');
        li.setAttribute('class', 'instagram-item');
        container.appendChild(li);

        var img = document.createElement('img');

        if (type === 'stream') {
          console.log(data[key].node.thumbnail_resources[4].src);
          img.setAttribute('src', data[key].node.thumbnail_resources[4].src);
          img.setAttribute('alt', data[key].node.accessibility_caption);
        }
        else {
          img.setAttribute('src', data[key]);
          img.setAttribute('alt', 'Instagram Gallery Image');
        }

        img.setAttribute('class', 'instagram-asset');
        li.appendChild(img);

      });

    }

  }

  INSTAGRAM.init();

  return INSTAGRAM;

});
