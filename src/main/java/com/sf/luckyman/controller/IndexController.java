package com.sf.luckyman.controller;

import com.google.code.kaptcha.Producer;
import com.sf.luckyman.entity.Signer;
import com.sf.luckyman.mapper.IndexMapper;
import com.sf.luckyman.util.Util;
import org.springframework.beans.factory.annotation.Autowired;
import org.springframework.stereotype.Controller;
import org.springframework.web.bind.annotation.*;

import javax.imageio.ImageIO;
import javax.servlet.ServletOutputStream;
import javax.servlet.http.HttpServletResponse;
import java.awt.image.BufferedImage;
import java.io.IOException;
import java.util.Map;

/**
 * index controller
 * @author choleece
 * @date 2018/10/23
 */
@Controller
@RequestMapping("/luckyman")
public class IndexController {
    @Autowired
    private IndexMapper indexMapper;

    @Autowired
    private Producer captchaProducer;

    @GetMapping("/captcha")
    public void getCaptcha(HttpServletResponse response) throws IOException {
        response.setHeader("Cache-Control", "no-store, no-cache");
        response.setContentType("image/jpeg");

        // 生成文字验证码
        String text = captchaProducer.createText();
        // 生成验证码图片
        BufferedImage image = captchaProducer.createImage(text);
        // 保存在session里

        ServletOutputStream outputStream = response.getOutputStream();
        ImageIO.write(image, "jpg", outputStream);
    }

    /**
     * 跳转到签到页面
     * @return
     */
    @GetMapping("/sign.html")
    public String sign() {
        return "/sign";
    }

    @GetMapping("/done.html")
    public String done() {
        return "done";
    }

    /**
     * 跳转到抽奖页面
     * @return
     */
    @GetMapping("/lucky.html")
    public String luckMan() {
        return "/luckyman";
    }

    @PostMapping("/sign")
    @ResponseBody
    public String signIn(String name, String gender, String tel, String email, String school, String major, String graduation) {
        Signer signer = new Signer();
        signer.setName(name);
        signer.setGender(gender);
        signer.setTel(tel);
        signer.setEmail(email);
        signer.setSchool(school);
        signer.setMajor(major);
        signer.setGraduation(graduation);
        System.out.println(signer.toString());
        try {
            indexMapper.insertSigner(signer);
            return Util.ok();
        } catch (Exception e) {
            return Util.error();
        }
    }

    @ResponseBody
    @GetMapping("/signer")
    public String getSigners() {
        try {
            return Util.ok(indexMapper.listSigner());
        } catch (Exception e) {
            return Util.error();
        }
    }

}
