// pages/goods/goods.js
const app = getApp();
var url ="http://127.0.0.1/ten/week1/web/?r=api/goods/goodsdesc";
Page({

  /**
   * 页面的初始数据
   */
  shopcar: function () {
    wx.switchTab({
      url: '/pages/shop/shop',
    })
  },
  data: {
    
  },
  addCart(){
    console.log(this.data);
    wx.request({
      url: 'http://127.0.0.1/ten/week1/web/?r=api/goods/addgoodscar',
      data:{
        goods_id:this.data.desc.goods_id,
        goods_num:1,
        goods_name: this.data.desc.goods_name,
        goods_desc: this.data.desc.goods_desc,
        goods_img:this.data.desc.goods_img,
        goods_price: this.data.desc.goods_price,
      },
      success:function(res){
        wx.showToast({
          title: '添加购物车成功',
          icon:"success",
          duration:1000,
        })
      },
      
    })
    
    
  },
  /**
   * 生命周期函数--监听页面加载
   */
  onLoad: function (e) {
    var that=this;
    wx.showToast({
      title: '加载中...',
      icon:"loading",
      duration:1000,
      success:function(res){
        wx.request({
          url: url,
          data:{
            id:e.id,
          },
          success:function(res){
            that.setData({
              desc:res.data.json,
            })
          }
        })
      }
    })
  },

  /**
   * 生命周期函数--监听页面初次渲染完成
   */
  onReady: function () {

  },

  /**
   * 生命周期函数--监听页面显示
   */
  onShow: function () {

  },

  /**
   * 生命周期函数--监听页面隐藏
   */
  onHide: function () {

  },

  /**
   * 生命周期函数--监听页面卸载
   */
  onUnload: function () {

  },

  /**
   * 页面相关事件处理函数--监听用户下拉动作
   */
  onPullDownRefresh: function () {

  },

  /**
   * 页面上拉触底事件的处理函数
   */
  onReachBottom: function () {

  },

  /**
   * 用户点击右上角分享
   */
  onShareAppMessage: function () {

  }
})