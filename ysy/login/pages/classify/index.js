var app = getApp()
Page({
    data: {
        navLeftItems: [],
        navRightItems: [],
        curNav: 1,
		curIndex: 0
    },
    onLoad: function() {

        var that = this
        
        wx.request({
          url: 'http://127.0.0.1/ten/week1/web/?r=api/goods/typelist',
            method: 'GET',
            data: {},
            header: {
                'Accept': 'application/json'
            },
            success: function(res) {
              console.log(res.data)
                that.setData({
                    navLeftItems: res.data.json,
                    navRightItems:res.data.json,
                    // navRightItems: res.data
                })
            }
        })
    },

    //事件处理函数
    switchRightTab: function(e) {
      console.log(e);
        let id = e.target.dataset.id,
			index = parseInt(e.target.dataset.index);
		this.setData({
			curNav: id,
			curIndex: index
		})
    }

})