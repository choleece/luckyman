package com.sf.luckyman.util;

import com.alibaba.fastjson.JSON;

public class Util {
    public static class Result {
        private int code;

        private String msg;

        private Object data;

        public int getCode() {
            return code;
        }

        public void setCode(int code) {
            this.code = code;
        }

        public String getMsg() {
            return msg;
        }

        public void setMsg(String msg) {
            this.msg = msg;
        }

        public Object getData() {
            return data;
        }

        public void setData(Object data) {
            this.data = data;
        }
    }

    public static String error() {
        Result result = new Result();
        result.setCode(-1);
        result.setMsg("服务器开小差了...");
        return JSON.toJSONString(result);
    }

    public static String ok() {
        Result result = new Result();
        result.setCode(0);
        result.setMsg("操作成功");
        return JSON.toJSONString(result);
    }

    public static String ok(Object o) {
        Result result = new Result();
        result.setCode(0);
        result.setMsg("操作成功");
        result.setData(o);
        return JSON.toJSONString(result);
    }
}
